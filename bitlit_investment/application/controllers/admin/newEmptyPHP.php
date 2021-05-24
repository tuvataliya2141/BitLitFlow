<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//******************* Award-Reward Data ********************\\
            
            $joining_date=$this->user_model->getJoiningDate($id);
            $jdate=$joining_date->creation_date;
            $award_data_left=$this->user_model->getAwardDataLeft($id);
            $award_data_right=$this->user_model->getAwardDataRight($id);
            echo "<pre>";print_r($id);
            foreach($award_data_left as $row)
            {
                $ldown=$row->downline;
            }
            $ldown=$ldown+1;
//            echo "<pre>Left_down:- ";print_r($ldown);
            foreach($award_data_right as $row1)
            {
                $rdown=$row1->downline;                
            }
            $rdown=$rdown+1;
//            echo "<pre>Right_down:- ";print_r($rdown);
            
            if($ldown == $rdown)
            {
                $pair=$ldown;
//                echo "<pre>Pair:- ";print_r($pair);
            }
            else if($ldown < $rdown)
            {
                 $l=$rdown-$ldown;
                 $r=$rdown-$l;
                 $pair=$r;
//                 echo "<pre>Pair:- ";print_r($pair);
            }
            else if($rdown < $ldown)
            {
                 $l=$ldown-$rdown;
                 $r=$ldown-$l;
                 $pair=$r;
//                 echo "<pre>Pair:- ";print_r($pair);
            }
            
            $last_date = date("Y-m-d", strtotime( $jdate ." +45 days"));
            $end_last_date = date("Y-m-d", strtotime( $last_date ." +90 days"));
            $awardstatus=$joining_date->award;
            if($last_date != $date)
            {
               if($sponcer >= 10 && $sponcer < 20 && $awardstatus == 0)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 8000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '1'));          
                }
               else if($sponcer >= 20 && $sponcer < 50 && $awardstatus == 1)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 12800,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '2'));          
                }
               else if($sponcer >= 50 && $sponcer < 100 && $awardstatus == 2)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 32000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '3'));          
                }
               else if($sponcer >= 100 && $sponcer < 250 && $awardstatus == 3)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 120000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '4'));          
                }
               else if($sponcer >= 250 && $sponcer < 1000 && $awardstatus == 4)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 360000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '5'));          
                }
               else if($sponcer >= 1000 && $sponcer < 3000 && $awardstatus == 5)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 1000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '6'));          
                }
               else if($sponcer >= 3000 && $sponcer < 7500 && $awardstatus == 6)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 2240000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '7'));          
                }
               else if($sponcer >= 7500 && $sponcer < 15000 && $awardstatus == 7)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 4000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '8'));          
                }
               else if($sponcer >= 15000 && $sponcer < 35000 && $awardstatus == 8)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 7200000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '9'));          
                }
               else if($sponcer >= 35000 && $sponcer < 75000 && $awardstatus == 9)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 16000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '10'));          
                }
               else if($sponcer == 75000 && $awardstatus == 10)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 40000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '11'));          
                }
            }
            else if($end_last_date != $date)
            {
                if($sponcer >= 10 && $sponcer < 20 && $awardstatus == 0)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 4000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '1'));          
                }
               else if($sponcer >= 20 && $sponcer < 50 && $awardstatus == 1)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 6400,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '2'));          
                }
               else if($sponcer >= 50 && $sponcer < 100 && $awardstatus == 2)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 16000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '3'));          
                }
               else if($sponcer >= 100 && $sponcer < 250 && $awardstatus == 3)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 60000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '4'));          
                }
               else if($sponcer >= 250 && $sponcer < 1000 && $awardstatus == 4)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 180000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '5'));          
                }
               else if($sponcer >= 1000 && $sponcer < 3000 && $awardstatus == 5)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 1000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '6'));          
                }
               else if($sponcer >= 3000 && $sponcer < 7500 && $awardstatus == 6)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 2240000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '7'));          
                }
               else if($sponcer >= 7500 && $sponcer < 15000 && $awardstatus == 7)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 4000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '8'));          
                }
               else if($sponcer >= 15000 && $sponcer < 35000 && $awardstatus == 8)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 7200000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '9'));          
                }
               else if($sponcer >= 35000 && $sponcer < 75000 && $awardstatus == 9)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 16000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '10'));          
                }
               else if($sponcer == 75000 && $awardstatus == 10)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 40000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '11'));          
                }
            }
            else 
            {
                if($sponcer >= 10 && $sponcer < 20 && $awardstatus == 0)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 4000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '1'));          
                }
               else if($sponcer >= 20 && $sponcer < 50 && $awardstatus == 1)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 6400,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '2'));          
                }
               else if($sponcer >= 50 && $sponcer < 100 && $awardstatus == 2)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 16000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '3'));          
                }
               else if($sponcer >= 100 && $sponcer < 250 && $awardstatus == 3)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 60000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '4'));          
                }
               else if($sponcer >= 250 && $sponcer < 1000 && $awardstatus == 4)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 180000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '5'));          
                }
               else if($sponcer >= 1000 && $sponcer < 3000 && $awardstatus == 5)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 500000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '6'));          
                }
               else if($sponcer >= 3000 && $sponcer < 7500 && $awardstatus == 6)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 1120000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '7'));          
                }
               else if($sponcer >= 7500 && $sponcer < 15000 && $awardstatus == 7)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 2000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '8'));          
                }
               else if($sponcer >= 15000 && $sponcer < 35000 && $awardstatus == 8)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 3600000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '9'));          
                }
               else if($sponcer >= 35000 && $sponcer < 75000 && $awardstatus == 9)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 8000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '10'));          
                }
               else if($sponcer == 75000 && $awardstatus == 10)
                {
                     $amt = array(
                        'user_id' => $id,
                        'amount'=> 20000000,
                        'date' => $date,
                        'type' => 'aword'
                    );
//                        echo "<pre>"; print_r($amt); die;
                    $result = $this->admin_payment_model->AddWallet($amt);
                    $result = $this->user_model->updateRegistration($id,array('award' => '11'));          
                }
            }
            
            //******************* Award-Reward Data ********************\\