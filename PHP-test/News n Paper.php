Q) newspaper can be made by news and paper
Determine what two words, if any, can form a given word using a dictionary of all possible words.  
For example, determine that "newspaper" can be made by "news" and "paper".

Class Words {
protected $_words = array();

protected function _getLetters() {
    $letters = array(a, b, c, d, e....z);
    return $letters;
}

protected function _getDic() {
 return $dic;
}

public function findWords () {
    $dic = $this->_getDic();
	$letters = $this->_getLetters();
	foreach ($letters as $letter) {
	    $index = $l - 'a';
		$availability[$index]++;
	}
	$countOfLetters = count($letters); // 26
	foreach ($dic as $word) {
	    $ok = true;
		$characterArray = implode("", $word);
		foreach ($characterArray as $char) {
		    $index = $char - 'a';
			count($index)++;
			if (count($index) > $availability) {
			    $ok = false;
				break;
			}
			if ($ok) {
			    $this->_add($word);
			}
		}
	}
}


protected function _add ($word) {
    $this->words[] = $word;
}	

public funciton getWords() {
    return $this->words;
}


}


