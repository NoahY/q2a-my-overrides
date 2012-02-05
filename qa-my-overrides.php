<?php
		
	function qa_sanitize_html() {
		$safe = qa_sanitize_html_base();
		$safe = preg_replace('/denied:dpr/','dpr:',$safe);
		return $safe;
	}
						
/*							  
		Omit PHP closing tag to help avoid accidental output
*/							  
						  

