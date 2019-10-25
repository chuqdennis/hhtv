<?php
	include_once ('env.php');
	include_once ('db-config.php');
	/**
	 * 
	 */
	class admin extends dbc
	{

		/** function to get property feature for property upload, returns a select option list **/
	    public function getExtra()
        {
             $query = $this->query("SELECT * FROM prop_features");
             while ($row = $this->getArray($query)) {
                 $feature = $row['feature'];
                 echo '<option style="padding: 1%">'.$feature.'</option>';
             }
             
        }

        /** function to run q query **/
        public function runQuery($data)
        {
            $result = $this->query($data);
            if ($this->getRows($result) > 0) {
                $row = $this->getArray($result);
                return $row;
            }
            else{
                return 'false';
            }
        }
		/** function to check for duplicate email and phone on registeration **/
		public function checkUserDuplicate($email,$phone,$bus_email){
			$q = $this->getRows($this->query("SELECT * FROM designers WHERE email='$email' OR bus_email='$bus_email' OR bus_phone ='$phone' "));
			return $q;
		}

		/** function to query the database **/
		public function siteQuery($query)
		{
	    	$ins = $this->query($query);
	    	if ($ins == true) {
				return 'done';
	    	}else{
	    		return $ins;
	    	}
		}

		/** function to split a string and return an array **/
		public function split($delimeter,$data){
			$result = explode($delimeter,$data);
			return $result;
		}

		/** function to get user's lands by id and status **/
		public function getDesigners($param){
			$query = $this->query($param);
			$designers = array();
            while($row = $this->getArray($query)){
                $obj = new stdClass();
                $obj->id = $row["id"];
                $obj->designer_id = $row["designer_id"];
                $obj->designer_name = $row["designer_name"];
                $obj->style = $row["style"];
                $obj->gender = $row["gender"];
                $obj->ig_link = $row["ig_link"];
                $obj->email = $row["email"];
                $obj->pc_1 = $row["pc_1"];
                $obj->pc_2 = $row["pc_2"];
                $obj->pc_3 = $row["pc_3"];
                $obj->bio = $row["bio"];
                $obj->store_addr = $row["store_addr"];
                $obj->state = $row["state"];
                $obj->bus_phone = $row["bus_phone"];
                $obj->bus_email = $row["bus_email"];
                $obj->date_joined = $row["date_joined"];
                $designers[] = $obj;
            }
            return $designers;
		}

		/** function to get user's lands by id and status **/
		public function getDesignerInfo($param){
			$row = $this->getArray($this->query($param));
                $obj = new stdClass();
                $obj->id = $row["id"];
                $obj->designer_id = $row["designer_id"];
                $obj->designer_name = $row["designer_name"];
                $obj->style = $row["style"];
                $obj->gender = $row["gender"];
                $obj->ig_link = $row["ig_link"];
                $obj->email = $row["email"];
                $obj->pc_1 = $row["pc_1"];
                $obj->pc_2 = $row["pc_2"];
                $obj->pc_3 = $row["pc_3"];
                $obj->bio = $row["bio"];
                $obj->store_addr = $row["store_addr"];
                $obj->state = $row["state"];
                $obj->bus_phone = $row["bus_phone"];
                $obj->bus_email = $row["bus_email"];
                $obj->date_joined = $row["date_joined"];
            	return $obj;
		}

		/** function to calculate time difference **/
		function elapsed($first,$second){
			$ago = $second-$first;
			$inMin = round($ago/60,1);
			$inHr = round($inMin/60,1);
			$inDay = round($inHr/24,1);
			$inWeek = round($inDay/7,1);
			$inMonth = round($inWeek/28,1);
			$inYear = round($inMonth/12,1);
			$time=$second;
			if ($inMin < 60) {
				$time = $inMin.' min';
			}elseif ($inHr < 24) {
				$tspilt = $this->split('.',$inHr);
				$time = $tspilt[0].' h '.@$tspilt[1].' m';
			}elseif ($inDay < 7) {
				$tspilt = $this->split('.',$inDay);
				$time = $tspilt[0].' d '.@$tspilt[1].' h';
			}elseif ($inWeek < 28) {
				$tspilt = $this->split('.',$inWeek);
				$time = $tspilt[0].' w '.@$tspilt[1].' d';
			}elseif ($inMonth < 12) {
				$tspilt = $this->split('.',$inMonth);
				$time = $tspilt[0].' mon '.@$tspilt[1].' w';
			}elseif ($inYear > 0.9) {
				$tspilt = $this->split('.',$inYear);
				$time = $tspilt[0].' yr '.@$tspilt[1].' mon';
			}
			return $time;
		}

	    /** function to logout a user **/
		public function logout(){
			// remove all session variables
			session_unset();
			// destroy the session
			session_destroy(); 
		}
	}

?>