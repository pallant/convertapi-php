<?php

namespace ConvertAPI;

require_once('Abstract2PowerPoint.php');

 /**
  * Extends the ConvertAPI class to convert PDF documents into PowerPoint
  * format via convertapi.com.
  *
  * @see http://convertapi.com/pdf-powerpoint-api
  */
class Pdf2PowerPoint extends Abstract2PowerPoint {

    protected $_https = false;

 /**
  * URL of the appropriate convertapi.com API.
  */
	protected $_apiUrl = '//do.convertapi.com/Pdf2PowerPoint';

 /**
  * An array of valid input file formats for this conversion. Overrides the
  * parent array.
  */
	protected $_validInputFormats = array('pdf', 'pdfa');

}
