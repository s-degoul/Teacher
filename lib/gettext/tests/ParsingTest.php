  
<?php
/*********************************************************************
Teacher

Copyright 2013 by Sébastien Mabon and Samuel Degoul (sdegoul@gmail.com)

This file is part of Teacher.

Teacher is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Teacher is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Teacher.  If not, see <http://www.gnu.org/licenses/>
*********************************************************************/
?>


<?php
require_once('PHPUnit/Framework.php');
//require_once('gettext.php');

class ParsingTest extends PHPUnit_Framework_TestCase
{
  public function test_extract_plural_forms_header_from_po_header()
  {
    $parser = new gettext_reader(NULL);
    // It defaults to a "Western-style" plural header.
    $this->assertEquals(
      'nplurals=2; plural=n == 1 ? 0 : 1;',
      $parser->extract_plural_forms_header_from_po_header(""));

    // Extracting it from the middle of the header works.
    $this->assertEquals(
      'nplurals=1; plural=0;',
      $parser->extract_plural_forms_header_from_po_header(
        "Content-type: text/html; charset=UTF-8\n"
        ."Plural-Forms: nplurals=1; plural=0;\n"
        ."Last-Translator: nobody\n"
      ));

    // It's also case-insensitive.
    $this->assertEquals(
      'nplurals=1; plural=0;',
      $parser->extract_plural_forms_header_from_po_header(
        "PLURAL-forms: nplurals=1; plural=0;\n"
      ));

    // It falls back to default if it's not on a separate line.
    $this->assertEquals(
      'nplurals=2; plural=n == 1 ? 0 : 1;',
      $parser->extract_plural_forms_header_from_po_header(
       "Content-type: text/html; charset=UTF-8" // note the missing \n here
        ."Plural-Forms: nplurals=1; plural=0;\n"
        ."Last-Translator: nobody\n"
      ));
  }

  /**
   * @dataProvider data_provider_test_npgettext
   */
  public function test_npgettext($number, $expected) {
    $parser = new gettext_reader(NULL);
    $result = $parser->npgettext("context",
                                 "%d pig went to the market\n",
                                 "%d pigs went to the market\n",
                                 $number);
    $this->assertSame($expected, $result);
  }
  public static function data_provider_test_npgettext() {
    return array(
                 array(1, "%d pig went to the market\n"),
                 array(2, "%d pigs went to the market\n"),
                 );
  }

}
?>
