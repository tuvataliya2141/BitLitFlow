<?php

/**
 * Description of ServiceMethods
 *
 * @author Dinesh Ninave
 */
class ServiceMethods {

    /**
     * Services on which authentication not required.
     * 
     * @var array 
     */
    private $open_service = array('login', 'register', 'forgotPassword', 'get_hot_deals', 'get_upcoming_deals',
        'get_faqs', 'get_legal', 'get_product_details', 'get_winning_tips', 'search_deals');

    function ServiceMethods() {
        $this->r_data['message'] = '';
        $this->r_data['success'] = 0;
    }

    function paramValidation($paramarray, $data) {
        $NovalueParam = '';
        foreach ($paramarray as $val) {
            if ($data[$val] == '') {
                $NovalueParam[] = $val;
            }
        }
        if (is_array($NovalueParam) && count($NovalueParam) > 0) {
            $this->r_data['message'] = 'Sorry, that is not valid input. You missed ' . implode(', ', $NovalueParam) . ' parameters';
        } else {
            $this->r_data['success'] = 1;
        }
        return $this->r_data;
    }

    /**
     * Login
     */
    public function login($username, $password) {
        $this->load->model('user_model');
        $this->load->model('product_model');
        $login = $this->user_model->userLogin($username, $password);
        if ($login) {

            //Add user session
            $this->r_data['token'] = $this->common->getSecureKey();
            $user_session = array(
                'user_id' => $login->user_id,
                'token' => $this->r_data['token'],
                'login_type' => 'login',
                'start_date' => DATETIME
            );
            $this->r_data['secret_log_id'] = $this->common->insertUserSession($user_session);
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Login Successful.';

            $this->r_data['data'] = new stdClass();
            $this->r_data['data']->user_info = $login;
            //$this->r_data['data']->product_data = $this->product_model->getAllProduct();
            $this->r_data['data']->product_deals = $this->product_model->getProductDeals();
        } else {
            $this->r_data['message'] = 'Login Failure.';
        }
        return $this->r_data;
    }

    /**
     * Logout
     */
    public function logout($secret_log_id) {
        $session = $this->common->getSessionInfo($secret_log_id);
        if ($session) {
            if ($session->user_id != $this->user_id) {
                $this->r_data['message'] = 'Secret log does not belongs to you.';
                return $this->r_data;
            }

            $this->common->logoutUser($secret_log_id);
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Logout Successful.';
        }
        return $this->r_data;
    }

    /**
     * User Register
     */
    public function register($data) {
        $user_data = array(
            'fname' => isset($data->fname) ? ucfirst($data->fname) : '',
            'lname' => isset($data->lname) ? ucfirst($data->lname) : '',
            'username' => isset($data->username) ? $data->username : '',
            'password' => isset($data->password) ? md5($data->password) : '',
            'email' => isset($data->email) ? $data->email : '',
            'mobile_no' => isset($data->mobile_no) ? $data->mobile_no : '',
            'address' => isset($data->address) ? $data->address : '',
            'birthdate' => isset($data->birthdate) ? $data->birthdate : ''
        );

        $userdata = array('fname', 'lname', 'username', 'password', 'email', 'mobile_no', 'birthdate');
        $validation = $this->paramValidation($userdata, $user_data);
        if ($validation['success'] == 0)
            return $this->r_data;

        $then = strtotime($data->birthdate);
        //The age to be over, over +18
        $min = strtotime('+18 years', $then);
        if (time() < $min) {
            $this->r_data['message'] = 'You are not eligible for registering in deals4you';
            return $this->r_data;
        }

        $check = false;
        $this->load->model('user_model');
        $this->load->model('product_model');
        if ($data->email) {
            $check = $this->user_model->checkUserExists('email', $data->email);
            $this->r_data['message'] = 'Email already registered!';
        }
        if (!$check && $data->mobile_no) {
            $check = $this->user_model->checkUserExists('phone', $data->mobile_no);
            $this->r_data['message'] = 'Mobile number already registered!';
        }
        if (!$check && $data->username) {
            $check = $this->user_model->checkUserExists('username', $data->username);
            $this->r_data['message'] = 'Username already registered!';
        }

        if ($check)
            return $this->r_data;

        if (isset($data->user_image))
            $user_data['user_image'] = $data->user_image;

        $chars = "0123456789";
        $code = $user_data['code'] = substr(str_shuffle($chars), 0, 4);
        $contents = file_get_contents('https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=8fPfQbo6lEqUoJy02fCNFg&senderid=DELFRU&channel=2&flashsms=0&number=' . $data->mobile_no . '&text=Your%20Verification%20code%20is:%20' . $code . '&route=1&DCS=0');
        $user_id = $this->user_model->addUser($user_data);

        //Add user session
        $this->r_data['token'] = $this->common->getSecureKey();
        $user_session = array(
            'user_id' => $user_id,
            'token' => $this->r_data['token'],
            'login_type' => 'verify',
            'start_date' => DATETIME
        );
        $this->common->insertUserSession($user_session);
        $this->r_data['user_id'] = $user_id;
        $this->r_data['success'] = 1;
        $this->r_data['code'] = $code;
        $this->r_data['message'] = 'User Successful Registered.';
        return $this->r_data;
    }

    /**
     * Update User
     */
    public function update_user($data) {

        $user_data = array(
            'fname' => isset($data->fname) ? ucfirst($data->fname) : '',
            'lname' => isset($data->lname) ? ucfirst($data->lname) : '',
            'birthdate' => isset($data->birthdate) ? $data->birthdate : ''
        );

        $userdata = array('fname', 'lname', 'birthdate');
        $validation = $this->paramValidation($userdata, $user_data);
        if ($validation['success'] == 0)
            return $this->r_data;

        $this->load->model('user_model');
        $this->r_data['message'] = 'User not found..!';
        $user_arr = $this->user_model->getUserWithSession($this->token_id, 'login');
        if ($user_arr && $user_arr->is_verify) {

            $then = strtotime($data->birthdate);
            //The age to be over, over +18
            $min = strtotime('+18 years', $then);
            if (time() < $min) {
                $this->r_data['message'] = 'You are not eligible..!';
                return $this->r_data;
            }

            if (isset($data->address))
                $user_data['address'] = $data->address;
            if (isset($data->user_image)) {
                if (file_exists(PROFILEPIC . $user_arr->user_image))
                    @unlink(PROFILEPIC . $user_arr->user_image);
                $user_data['user_image'] = $data->user_image;
            }

            $this->user_model->updateUser($user_data, $this->user_id);
            $this->r_data['data'] = $this->user_model->getUser($this->user_id);
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'User data successfully updated..!';
        }
        return $this->r_data;
    }

    /**
     * Verify User
     */
    public function verify_user($code) {
        $this->load->model('user_model');
        $user_details = $this->user_model->getUserWithSession($this->token_id, 'verify');
        $verify = false;
        if ($user_details) {
            if ($code && $user_details->code == $code) {
                $verify = true;
                $this->user_model->updateUser(array('is_verify' => 1, 'code' => 0), $this->user_id);
                $this->common->logoutUser($user_details->session_id);
            }
        }

        if ($verify) {
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Successfully verified..!';
        } else {
            $this->r_data['message'] = 'User not verified..!';
        }
        return $this->r_data;
    }

    /**
     * Resend Code
     */
    public function resend_code($mobile_no) {
        $this->load->model('user_model');
        $user_details = $this->user_model->checkUserExists('phone', $mobile_no);
        $this->r_data['message'] = 'User already verified..!';
        if (!$user_details)
            $this->r_data['message'] = 'User not found..!';

        $user_data = $this->user_model->getUserWithSession($this->token_id, 'verify');
        if ($user_data && $user_details && $user_details->is_verify == 0) {
            $chars = "0123456789";
            $code = substr(str_shuffle($chars), 0, 4);
            $contents = file_get_contents('https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=8fPfQbo6lEqUoJy02fCNFg&senderid=DELFRU&channel=2&flashsms=0&number=' . $user_details->mobile_no . '&text=Your%20Verification%20code%20is:%20' . $code . '&route=1&DCS=0');
            $this->user_model->updateUser(array('code' => $code), $this->user_id);

            //update user session data
            $this->common->logoutUser($user_data->session_id);

            //Add user session
            $this->r_data['token'] = $this->common->getSecureKey();
            $user_session = array(
                'user_id' => $this->user_id,
                'token' => $this->r_data['token'],
                'login_type' => 'verify',
                'start_date' => DATETIME
            );
            $this->common->insertUserSession($user_session);
            $this->r_data['user_id'] = $user_data->user_id;
            $this->r_data['success'] = 1;
            $this->r_data['code'] = $code;
            $this->r_data['message'] = 'Verification code successfully sent..!';
        }
        return $this->r_data;
    }

    /**
     * Get All Products
     */
    public function get_all_products() {
        $this->load->model('product_model');
        $products = $this->product_model->getProductDealDetails($this->user_id);
        $this->r_data['message'] = 'Product deal not found..!';
        if ($products) {
            $this->r_data['data'] = $products;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Product deal found..!';
        }
        return $this->r_data;
    }

    /**
     * Get Hot Deals
     */
    public function get_hot_deals($offset = 0) {
        $this->load->model('product_model');
        $this->r_data['data'] = $this->product_model->getHotDeal($offset, 4);
        $this->r_data['success'] = 1;
        return $this->r_data;
    }

    /**
     * Get Upcoming Deals
     */
    public function get_upcoming_deals($offset = 0) {
        $this->load->model('product_model');
        $this->r_data['data'] = $this->product_model->getUpcomingDeal($offset, 4);
        $this->r_data['success'] = 1;
        return $this->r_data;
    }

    /**
     * Get Live Deal
     */
    public function get_live_deal($offset = 0) {
        $this->load->model('product_model');
        $this->r_data['data'] = $this->product_model->getLiveDeal($this->user_id, $offset, 4);
        $this->r_data['success'] = 1;
        return $this->r_data;
    }

    /**
     * Get Finished Deals
     */
    public function get_finished_deals($offset = 0) {
        $this->load->model('product_model');
        $this->r_data['data'] = $this->product_model->getFinishAndTerminatedDeals(0, $offset, 4);
        $this->r_data['success'] = 1;
        return $this->r_data;
    }

    /**
     * Get Product Details
     */
    public function get_product_details($product_id) {
        $this->load->model('product_model');
        $products = $this->product_model->getProductWithDealById($product_id, false);
        $this->r_data['message'] = 'Product detail not found..!';
        if ($products) {
            $this->r_data['data'] = $products;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Product detail found..!';
        }
        return $this->r_data;
    }

    /**
     * Search Deals
     */
    public function search_deals($value, $offset = 0) {
        $this->load->model('product_model');
        $limit = 4;
        $start = $offset * $limit;
        $products = $this->product_model->getSearchProductWithDealByName($limit, $start, $value);
        $this->r_data['message'] = 'Search deal not found..!';
        if ($products) {
            $this->r_data['data'] = $products;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Search deal found..!';
        }
        return $this->r_data;
    }

    /**
     * Get User Profile
     */
    public function get_user_profile() {
        $this->load->model('user_model');
        $this->load->model('product_model');
        $user_data = $this->user_model->getUser($this->user_id);
        $this->r_data['message'] = 'User detail not found..!';
        if ($user_data) {
            $this->r_data['total_deals'] = count($this->product_model->getMyDeals($user_data->user_id));
            $this->r_data['data'] = $user_data;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'User detail found..!';
        }
        return $this->r_data;
    }

    /**
     * change password
     */
    public function changePassword($oldpassword, $newpassword, $confirmpassword) {
        $this->load->model('user_model');

        if ($newpassword != $confirmpassword) {
            $this->r_data['message'] = 'Password and confirm password mismatch.';
            return $this->r_data;
        }

        $user_data = $this->user_model->getUser($this->user_id);
        $this->r_data['message'] = 'User detail not found..!';
        if ($user_data) {
            if ($user_data->password != md5($oldpassword)) {
                $this->r_data['message'] = 'Old Password Mismatch.';
                return $this->r_data;
            }
            $userUpdate = $this->user_model->updateUser(array('password' => md5($newpassword)), $this->user_id);
            if (!$userUpdate)
                $this->r_data['message'] = 'Change password failed...!';

            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Password changed successfully..!';
        }
        return $this->r_data;
    }

    /**
     * Forgot password
     */
    public function forgotPassword($value) {
        $this->load->model('user_model');
        $this->r_data['message'] = 'Please enter email or mobile number.';
        if (!$value)
            return $this->r_data;

        $check = $this->user_model->checkForgotUser($value);
        $this->r_data['message'] = 'User not found.';

        if ($check) {
            $chars = "0123456789";
            $code = substr(str_shuffle($chars), 0, 4);
            $contents = file_get_contents('https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=8fPfQbo6lEqUoJy02fCNFg&senderid=DELFRU&channel=2&flashsms=0&number=' . $check->mobile_no . '&text=Your%20Verification%20code%20is:%20' . $code . '&route=1&DCS=0');
            $this->user_model->updateUser(array('code' => $code), $check->user_id);

            //Add user session
            $this->r_data['token'] = $this->common->getSecureKey();
            $user_session = array(
                'user_id' => $check->user_id,
                'token' => $this->r_data['token'],
                'login_type' => 'forgot',
                'is_active' => 1,
                'start_date' => DATETIME
            );

            $this->common->insertUserSession($user_session);
            $this->r_data['success'] = 1;
            $this->r_data['code'] = $code;
            $this->r_data['user_id'] = $check->user_id;
            $this->r_data['message'] = 'OTP send Successfully.';
        }
        return $this->r_data;
    }

    /**
     * Verify Forgot OTP
     */
    public function verifyForgotOTP($otp) {
        $this->load->model('user_model');

        if (!$otp) {
            $this->r_data['message'] = 'Please enter OTP first.';
            return $this->r_data;
        }

        $verify = $this->user_model->getUser($this->user_id);
        $this->r_data['message'] = 'Wrong OTP.';

        $user_data = $this->user_model->getUserWithSession($this->token_id, 'forgot');

        if ($verify && $user_data) {
            $this->r_data['message'] = 'OTP Mismatch.';
            if ($verify->code == $otp) {
                $newpassword = $this->common->generatePassword();
				$contents = file_get_contents('https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=8fPfQbo6lEqUoJy02fCNFg&senderid=DELFRU&channel=2&flashsms=0&number=' . $verify->mobile_no . '&text=Your%20New%20Password%20is:%20' . $newpassword . '&route=1&DCS=0');
                $this->user_model->updateUser(array('password' => md5($newpassword), 'code' => 0), $this->user_id);

                //update user session data
                $this->common->logoutUser($user_data->session_id);

                $this->r_data['success'] = 1;
                $this->r_data['password'] = $newpassword;
                $this->r_data['message'] = 'Password send Successfully.';
            }
        }

        return $this->r_data;
    }

    /**
     * Add Money into wallet
     */
    public function addMoney($amount) {
        $this->load->model('user_model');

        if (!$amount) {
            $this->r_data['message'] = 'Enter amount first.';
            return $this->r_data;
        }

        $verify = $this->user_model->getUser($this->user_id);
        $this->r_data['message'] = 'User not found.';

        if ($verify) {
            $this->user_model->updateUser(array('balance' => ($verify->balance + $amount)), $this->user_id);
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Money added successfully.';
        }

        return $this->r_data;
    }

    /**
     * Withdraw Money From wallet
     */
    public function withdrawMoney($amount) {
        $this->load->model('user_model');

        if (!$amount)
            $this->r_data['message'] = 'Enter amount first.';

        $verify = $this->user_model->getUser($this->user_id);
        $this->r_data['message'] = 'User not found.';

        if ($verify) {
            $remain = $verify->balance - $amount;
            $this->r_data['message'] = 'Not sufficient balance to withdraw.';
            if ($remain > 0) {
                $this->user_model->updateUser(array('balance' => $remain), $this->user_id);
                $this->r_data['success'] = 1;
                $this->r_data['message'] = 'Withdraw money successfully.';
            }
        }

        return $this->r_data;
    }

    /**
     * Get Faqs
     */
    public function get_faqs() {
        $this->load->model('admin_terms_model');
        $faqs_data = $this->admin_terms_model->getAllFaqs();
        $this->r_data['message'] = 'Faqs not found..!';
        if ($faqs_data) {
            $this->r_data['data'] = $faqs_data;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Faqs found..!';
        }
        return $this->r_data;
    }

    /**
     * Get Terms and Condition
     */
    public function get_legal() {
        $this->load->model('admin_terms_model');
        $legal_data = $this->admin_terms_model->getAllLegal();
        $this->r_data['message'] = 'Terms and Condition not found..!';
        if ($legal_data) {
            $this->r_data['data'] = $legal_data;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Terms and Condition found..!';
        }
        return $this->r_data;
    }

    /**
     * Get Winning tips
     */
    public function get_winning_tips() {
        $this->load->model('admin_terms_model');
        $winning_tips_data = $this->admin_terms_model->getAllWinning_tips();
        $this->r_data['message'] = 'Winning tips not found..!';
        if ($winning_tips_data) {
            $this->r_data['data'] = $winning_tips_data;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Winning tips found..!';
        }
        return $this->r_data;
    }

    /**
     * Agree to deal
     */
    public function agree_deal($product_deal_id) {
        $this->load->model('user_model');
        $this->load->model('product_model');
        $product_deal = $this->product_model->getProductDealById($product_deal_id);
        $user_data = $this->user_model->getUserWithSession($this->token_id, 'login');

        $check = false;
        $this->r_data['message'] = 'Deal not agreed..!';
        if ($user_data && $user_data->balance && $user_data->is_verify && $product_deal) {
            $this->r_data['message'] = 'You have not sufficiant balance in wallet..!';
            $total_amt = $user_data->balance - $product_deal->deal_price;
            if ($total_amt >= 0) {

                $this->r_data['message'] = 'You can not deal more than one product at a time..!';
                $deal_date = $this->product_model->checkDealDateDetail($this->user_id, $product_deal->deal_start_datetime);
                if (!$deal_date) {

                    $this->r_data['message'] = 'You have already dealed..!';
                    $deal = $this->product_model->checkDealDetail($this->user_id, $product_deal->product_deal_id);
                    if (!$deal) {
                        $deal_detail = array(
                            'product_deal_id' => $product_deal->product_deal_id,
                            'product_id' => $product_deal->product_id,
                            'user_id' => $this->user_id
                        );

                        $check = true;
                        $this->user_model->updateUser(array('balance' => $total_amt), $this->user_id);
                        $this->common->updateAdminBalance(1, $product_deal->deal_price, 'add');
                        $this->product_model->insertDealDetail($deal_detail);
                    }
                }
            }
        }

        if ($check) {
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Deal agreed successfully..!';
        }
        return $this->r_data;
    }

    /**
     * Add bid to deal
     */
    public function add_bid($product_deal_id) {
        $this->load->model('user_model');
        $this->load->model('product_model');
        $product_deal = $this->product_model->checkProductDealDetail($this->user_id, $product_deal_id);
        $user_data = $this->user_model->getUserWithSession($this->token_id, 'login');

        $this->r_data['message'] = 'Deal not added..!';
        if (!$user_data)
            $this->r_data['message'] = 'User not found..!';

        if (($product_deal && $product_deal->status == 'win') || ($this->product_model->getDealCompleted($this->user_id, $product_deal_id))) {
            $this->r_data['message'] = 'Deal Completed..!';
            $this->r_data['success'] = 1;
            return $this->r_data;
        }

        if ($user_data && $user_data->is_verify && $product_deal) {
            $this->r_data['message'] = 'You have not participate in this deal..!';
            if ($this->product_model->checkDealDateDetail($this->user_id, $product_deal->deal_start_datetime)) {
                $this->r_data['message'] = 'You can try after deal interval time..!';
                $check_bid = $this->product_model->checkBid($this->user_id, $product_deal_id);
                if ($check_bid) {
                    $deal = $this->product_model->checkDealDetail($this->user_id, $product_deal_id);
                    $bid_data = array(
                        'deal_id' => $deal->deal_id,
                        'product_deal_id' => $product_deal->product_deal_id,
                        'bid_value' => $product_deal->current_deal + $product_deal->deal_increment,
                        'bid_datetime' => DATETIME,
                        'user_id' => $this->user_id
                    );
                    $this->product_model->insertBid($bid_data);

                    $this->r_data['data'] = new stdClass();
                    $this->r_data['data']->deal = $this->product_model->checkProductDealDetail($this->user_id, $product_deal_id);
                    $this->r_data['data']->history = $this->product_model->getDealHistory($product_deal_id);
                    $this->r_data['data']->new_history = $this->product_model->getNewDealHistory($product_deal_id);
                    $this->r_data['data']->winner = $this->product_model->getWinnerDetail($product_deal_id);
                    $this->r_data['success'] = 1;
                    $this->r_data['message'] = 'Deal added successfully..!';
                }
            }
        }
        return $this->r_data;
    }

    /**
     * Deal History
     */
    public function deal_history($product_deal_id) {
        $this->load->model('user_model');
        $this->load->model('product_model');
        $product_deal = $this->product_model->checkDealDetail($this->user_id, $product_deal_id);
        $user_data = $this->user_model->getUserWithSession($this->token_id, 'login');

        $this->r_data['message'] = 'Deal history not found..!';
        if (!$user_data)
            $this->r_data['message'] = 'User not found..!';

        if ($user_data && $user_data->is_verify && $product_deal) {
            $this->r_data['data'] = new stdClass();
            $this->r_data['data']->deal = $this->product_model->checkProductDealDetail($this->user_id, $product_deal_id);
            $this->r_data['data']->history = $this->product_model->getDealHistory($product_deal_id);
            $this->r_data['data']->new_history = $this->product_model->getNewDealHistory($product_deal_id);
            $this->r_data['data']->winner = $this->product_model->getWinnerDetail($product_deal_id);
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Deal history found..!';
        }
        return $this->r_data;
    }

    /**
     * Add Winner Review
     */
    public function add_winner_review($product_id, $winner_review, $attachment) {
        $this->load->model('product_model');
        $this->load->model('user_model');
        $this->r_data['message'] = 'Winner review not added..!';
        $winner = $this->product_model->checkWinnerReview($this->user_id, $product_id);
        $user_data = $this->user_model->getUserWithSession($this->token_id, 'login');
        //echo '<pre>'; print_r($winner); die;
        if (!$user_data)
            $this->r_data['message'] = 'User not found..!';

        //if (!$winner) {
        $winner_data = $this->product_model->getWinnerReviewById($this->user_id, $product_id);
        //echo '<pre>'; print_r($winner_data); die;
        if ($winner_data) {
            $data = array(
                'winner_review' => trim($winner_review),
                'attachment' => $attachment
            );

            $this->product_model->updateWinnerReview($winner_data->id, $data);
            $this->r_data['data'] = $this->product_model->getWinnerReviewById($this->user_id, $product_id);
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Winner review added..!';
        }
        //  }
        return $this->r_data;
    }

    /**
     * Get Winner Detail
     */
    public function get_winner_detail() {
        $this->load->model('product_model');
        $this->r_data['message'] = 'Winner not found..!';
        $winner = $this->product_model->getWinnerReviewDetail();
        if ($winner) {
            $this->r_data['data'] = $winner;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Winner found..!';
        }
        return $this->r_data;
    }

    /**
     * My Deals
     */
    public function my_deals($offset = 0) {
        $this->load->model('product_model');
        $this->load->model('user_model');
        $this->r_data['message'] = 'Deals not found..!';
        $user_data = $this->user_model->getUserWithSession($this->token_id, 'login');

        if (!$user_data)
            $this->r_data['message'] = 'User not found..!';

        $deals = $this->product_model->getMyDeals($this->user_id, $offset, 20);
        if ($deals) {
            $this->r_data['data'] = $deals;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Deals found..!';
        }
        return $this->r_data;
    }

    /**
     * Get Transaction history
     */
    public function get_transaction_history($all = 0) {
        $this->load->model('transactions_model');
        $transactions_data = $this->transactions_model->getAllTransactions($this->user_id, $all);
        $this->r_data['message'] = 'Transaction not found..!';
        if ($transactions_data) {
            $this->r_data['data'] = $transactions_data;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Transaction found..!';
        }
        return $this->r_data;
    }

    /**
     * Add Deposit 
     */
    public function add_deposit($data) {
        $this->load->model('transactions_model');
        $user_data = array(
            'user_id' => isset($this->user_id) ? $this->user_id : '',
            'transaction_id' => isset($data->transaction_id) ? $data->transaction_id : '',
            'mobile_no' => isset($data->mobile_no) ? $data->mobile_no : '',
            'transaction_date' => isset($data->transaction_date) ? $data->transaction_date : '',
            'payment_method' => isset($data->payment_method) ? $data->payment_method : '',
            'amount' => isset($data->amount) ? $data->amount + 0 : 0
        );

        $userdata = array('user_id', 'transaction_id', 'mobile_no', 'transaction_date', 'amount', 'payment_method');
        $validation = $this->paramValidation($userdata, $user_data);
        if ($validation['success'] == 0)
            return $this->r_data;

        if ($user_data['amount'] < 100 || $user_data['amount'] > 500) {
            $this->r_data['message'] = 'Minimum Deposit amount is Rs.100/-. Maximum Rs.500/.';
			$this->r_data['success'] = 0;
            return $this->r_data;
        }

        $this->load->model('user_model');
        if ($this->transactions_model->getTransactionById($data->transaction_id)) {
            $this->r_data['message'] = 'This Transaction Id is already exists.';
            return $this->r_data;
        }

        $user1_data = $this->user_model->getUserWithSession($this->token_id, 'login');
        if (!$user1_data) {
            $this->r_data['message'] = 'User not found..!';
            return $this->r_data;
        }
        $user_data['transaction_type'] = 'deposit';
        $this->transactions_model->addTransaction($user_data);
        $this->r_data['success'] = 1;
        $this->r_data['message'] = 'Your request for deposit sent successfully.';
        return $this->r_data;
    }

    /**
     * Add Withdraw
     */
    public function add_withdraw($data) {
        $this->load->model('transactions_model');
        $this->load->model('user_model');

        $user_data = array(
            'user_id' => isset($this->user_id) ? $this->user_id : '',
            'transaction_id' => isset($data->transaction_id) ? $data->transaction_id : '',
            'mobile_no' => isset($data->mobile_no) ? $data->mobile_no : '',
            'payment_method' => isset($data->payment_method) ? $data->payment_method : '',
            'amount' => isset($data->amount) ? $data->amount + 0 : 0
        );

        $userdata = array('user_id', 'transaction_id', 'mobile_no', 'amount', 'payment_method');
        $validation = $this->paramValidation($userdata, $user_data);
        if ($validation['success'] == 0)
            return $this->r_data;

        $verify = $this->user_model->getUser($user_data['user_id']);
		//echo '<pre>'; print_r($verify); die;
        $total_amt = 0;
        if ($verify)
            $total_amt = $verify->balance - ($user_data['amount']);
		//echo '<pre>'; print_r($total_amt); die;
	
	if ($total_amt < 0) {
            $this->r_data['message'] = 'Minimum Withdraw amount is Rs.100/-. Maximum Rs.500/- per day.';
            $this->r_data['success'] = 0;
            return $this->r_data;
        }
         
        if ($user_data['amount'] < 100 || $user_data['amount'] > 500) {
            $this->r_data['message'] = 'Minimum Withdraw amount is Rs.100/-. Maximum Rs.500/- per day.';
			$this->r_data['success'] = 0;
            return $this->r_data;
        }

        $check_date = $this->transactions_model->getStatement($this->user_id);
        $total_amt = $user_data['amount'];
        if ($check_date) {
            foreach ($check_date as $value) {
                $date = date('Y-m-d', strtotime($value->transaction_date));
                if ($value->transaction_type == 'withdraw' && $date == date('Y-m-d', strtotime(DATETIME)))
				{
                    $total_amt = $total_amt + $value->amount;
                }
            }
        }

        if ($user_data['amount'] > 500) {
            $this->r_data['message'] = 'Minimum Deposit amount is Rs.100/-. Maximum Rs.500/- per day.';
            $this->r_data['success'] = 0;
            return $this->r_data;
        }

        $user1_data = $this->user_model->getUserWithSession($this->token_id, 'login');
        if (!$user1_data) {
            $this->r_data['message'] = 'User not found..!';
            return $this->r_data;
        }

        if ($this->transactions_model->getTransactionById($data->transaction_id)) {
            $this->r_data['message'] = 'This Transaction Id is already exists.';
            return $this->r_data;
        }

        $this->r_data['message'] = 'You have not sufficiant balance in wallet..!';
        $this->r_data['success'] = 0;
        $total_amt = $user1_data->balance - ($user_data['amount']);
        if ($user_data['amount'] >= 100) {
			$user_data['transaction_date'] = DATETIME;
            $user_data['transaction_type'] = 'withdraw';
            $user_data['amount'] = $user_data['amount'] - 5;
            $user_data['fee'] = 5;
            $this->transactions_model->addTransaction($user_data);
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Your request for withdraw sent successfully.';
        }
        return $this->r_data;
    }

    /**
     * Get howtomoney
     */
    public function get_howtomoney() {
        $this->load->model('admin_terms_model');
        $howtomoney_data = $this->admin_terms_model->getAllHowToMoney();
        $this->r_data['message'] = 'Howtomoney not found..!';
        if ($howtomoney_data) {
            $this->r_data['data'] = $howtomoney_data;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Howtomoney found..!';
        }
        return $this->r_data;
    }

    /**
     * Set Transaction Password
     */
    public function set_transaction_password($transaction_password) {
        $this->load->model('user_model');
        $this->r_data['message'] = 'User not found..!';
        $userdata = $this->user_model->getUserWithSession($this->token_id, 'login');
        if (!$userdata)
            return $this->r_data;

        if ($userdata && !$userdata->code) {
            $this->user_model->updateUser(array('trans_pass' => md5($transaction_password)), $this->user_id);
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Transaction password set successflly..!';
        }
        return $this->r_data;
    }

    /**
     * Verify Transaction Password
     */
    public function verify_transaction_password($transaction_password) {
        $this->load->model('user_model');
        $this->r_data['message'] = 'Wrong password"..!';
        $userdata = $this->user_model->getUserWithSession($this->token_id, 'login');
        if (!$userdata)
            return $this->r_data;

        $this->r_data['message'] = 'Transaction password not matched..!';
        if ($verify = $this->user_model->getUser($this->user_id)) {
            if (md5($transaction_password) != $verify->trans_pass)
                return $this->r_data;
        }

        $this->r_data['success'] = 1;
        $this->r_data['message'] = 'Transaction password matched successflly..!';
        return $this->r_data;
    }

    /**
     * Forgot Transaction Password
     */
    public function forgot_transaction_password($value) {
        $this->load->model('user_model');
        $this->r_data['message'] = 'Please enter your mobile number.';
        if (!$value)
            return $this->r_data;

        $check = $this->user_model->checkForgotUser($value);
        $this->r_data['message'] = 'User not found.';

        if ($check) {
            $chars = "0123456789";
            $code = substr(str_shuffle($chars), 0, 4);
            $contents = file_get_contents('https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=8fPfQbo6lEqUoJy02fCNFg&senderid=DELFRU&channel=2&flashsms=0&number=' . $check->mobile_no . '&text=Your%20Verification%20code%20is:%20' . $code . '&route=1&DCS=0');
            $this->user_model->updateUser(array('code' => $code), $this->user_id);

            //Add user session
            $this->r_data['token'] = $this->common->getSecureKey();
            $user_session = array(
                'user_id' => $this->user_id,
                'token' => $this->r_data['token'],
                'login_type' => 'forgot',
                'start_date' => DATETIME
            );

            $this->common->insertUserSession($user_session);
            $this->r_data['success'] = 1;
            $this->r_data['code'] = $code;
            $this->r_data['user_id'] = $this->user_id;
            $this->r_data['message'] = 'OTP send Successfully.';
        }
        return $this->r_data;
    }

    /**
     * Verify Forgot Transaction Password
     */
    public function verify_forgot_transaction_password($otp) {
        $this->load->model('user_model');
        $this->r_data['message'] = 'Please enter OTP first.';
        if (!$otp)
            return $this->r_data;

        $this->r_data['message'] = 'Wrong OTP..!';
        $userdata = $this->user_model->getUserWithSession($this->token_id, 'forgot');
        if ($userdata) {
            $this->r_data['message'] = 'OTP Mismatch.';
            if ($userdata->code == $otp) {
                $this->user_model->updateUser(array('code' => 0), $this->user_id);

                //update user session data
                $this->common->logoutUser($userdata->session_id);

                $this->r_data['success'] = 1;
                $this->r_data['message'] = 'User Successfully Verified..!';
            }
        }
        return $this->r_data;
    }

    /**
     * Get Howtodeals
     */
    public function get_howtodeals() {
        $this->load->model('admin_terms_model');
        $howtodeals_data = $this->admin_terms_model->getAllHowToDeals();
        $this->r_data['message'] = 'Howtodeals not found..!';
        if ($howtodeals_data) {
            $this->r_data['data'] = $howtodeals_data;
            $this->r_data['success'] = 1;
            $this->r_data['message'] = 'Howtodeals found..!';
        }
        return $this->r_data;
    }

}
