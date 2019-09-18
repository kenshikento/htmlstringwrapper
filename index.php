<?php 

	class HtmlWrapper
	{
		public function controller()
		{
			$type = $this->phpParser();

			echo($this->domWrapper($type,'hello'));
		}

		public function phpParser()
		{
			return('copy');
			// Need to get font attributes
		}

		public function domWrapper(String $type)
		{	
			$data = 'hello';

			if ($type==='H1' OR $type==='H2' OR $type==='copy') {

				if ($type ==='copy') {
					$type = 'p';
					return $string = '<'.$type.'>'.$data.'</'.$type.'>';
				}

				return $string = '<'.$type.'>'.$data.'</'.$type.'>';
			}

			if ($type==='h1') {
				$string = '<'.$type.'>'.$data.'</'.$type.'>';
			}

		}
	}


	$file = new HtmlWrapper();
	$file->controller();
