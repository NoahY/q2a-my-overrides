<?php
		
	function qa_sanitize_html($html, $linksnewwindow=false) {
		$safe = qa_sanitize_html_base($html, $linksnewwindow);
		$safe = preg_replace('/denied:dpr/','dpr:',$safe);
		return $safe;
	}
						
/*							  
		Omit PHP closing tag to help avoid accidental output
*/							  
						  

