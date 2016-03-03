  
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


 <script type="text/javascript">

	function TestGrp1() {
 		var count = 0;
 		var i =0;

	 	for (i = 1; i <= 5; i++) {
		count += document.getElementById('user_eval_q1_' + i).checked ? 1 : 0;
		}

	 	if (count >= 2) {
	 	for (i = 1; i <= 5; i++) {
		document.getElementById('user_eval_q1_' + i).disabled = !document.getElementById('user_eval_q1_' + i).checked;
		}
		} else {
		for (i = 1; i <= 5; i++) {
		document.getElementById('user_eval_q1_' + i).disabled = false;
		}
		}
		}

 	function TestGrp2() {
	 var count = 0;
	 var i =0;

 		for (i = 1; i <= 5; i++) {
		count += document.getElementById('user_eval_q2_' + i).checked ? 1 : 0;
		}

		if (count >= 2) {

 		for (i = 1; i <= 5; i++) {
		document.getElementById('user_eval_q2_' + i).disabled = !document.getElementById('user_eval_q2_' + i).checked;
		}
		} else {

		for (i = 1; i <= 5; i++) {
		document.getElementById('user_eval_q2_' + i).disabled = false;
		}
		}
		}

 	function TestGrp3() {
	var count = 0;
	var i =0;

		for (i = 1; i <= 6; i++) {
		count += document.getElementById('user_eval_q3_' + i).checked ? 1 : 0;
		}

		if (count >= 3) {
		for (i = 1; i <= 6; i++) {
		document.getElementById('user_eval_q3_' + i).disabled = !document.getElementById('user_eval_q3_' + i).checked;
		}
		} else {
		for (i = 1; i <= 6; i++) {
		document.getElementById('user_eval_q3_' + i).disabled = false;
		}
		}
		}

	function TestGrp4() {
 		var count = 0;
 		var i =0;

	 	for (i = 1; i <= 4; i++) {
		count += document.getElementById('user_eval_q4_' + i).checked ? 1 : 0;
		}

	 	if (count >= 2) {
	 	for (i = 1; i <= 4; i++) {
		document.getElementById('user_eval_q4_' + i).disabled = !document.getElementById('user_eval_q4_' + i).checked;
		}
		} else {
		for (i = 1; i <= 4; i++) {
		document.getElementById('user_eval_q4_' + i).disabled = false;
		}
		}
		}

 	function TestGrp5() {
	 var count = 0;
	 var i =0;

 		for (i = 1; i <= 4; i++) {
		count += document.getElementById('user_eval_q5_' + i).checked ? 1 : 0;
		}

		if (count >= 1) {

 		for (i = 1; i <= 4; i++) {
		document.getElementById('user_eval_q5_' + i).disabled = !document.getElementById('user_eval_q5_' + i).checked;
		}
		} else {

		for (i = 1; i <= 4; i++) {
		document.getElementById('user_eval_q5_' + i).disabled = false;
		}
		}
		}

 	function TestGrp6() {
	var count = 0;
	var i =0;

		for (i = 1; i <= 2; i++) {
		count += document.getElementById('user_eval_q6_' + i).checked ? 1 : 0;
		}

		if (count >= 1) {
		for (i = 1; i <= 2; i++) {
		document.getElementById('user_eval_q6_' + i).disabled = !document.getElementById('user_eval_q6_' + i).checked;
		}
		} else {
		for (i = 1; i <= 2; i++) {
		document.getElementById('user_eval_q6_' + i).disabled = false;
		}
		}
		}

	function TestGrp7() {
	var count = 0;
	var i =0;

		for (i = 1; i <= 4; i++) {
		count += document.getElementById('user_eval_q7_' + i).checked ? 1 : 0;
		}

		if (count >= 2) {
		for (i = 1; i <= 4; i++) {
		document.getElementById('user_eval_q7_' + i).disabled = !document.getElementById('user_eval_q7_' + i).checked;
		}
		} else {
		for (i = 1; i <= 4; i++) {
		document.getElementById('user_eval_q7_' + i).disabled = false;
		}
		}
		}

	function TestGrp8() {
 		var count = 0;
 		var i =0;

	 	for (i = 1; i <= 9; i++) {
		count += document.getElementById('user_eval_q8_' + i).checked ? 1 : 0;
		}

	 	if (count >= 4) {
	 	for (i = 1; i <= 9; i++) {
		document.getElementById('user_eval_q8_' + i).disabled = !document.getElementById('user_eval_q8_' + i).checked;
		}
		} else {
		for (i = 1; i <= 9; i++) {
		document.getElementById('user_eval_q8_' + i).disabled = false;
		}
		}
		}

 	function TestGrp9() {
	 var count = 0;
	 var i =0;

 		for (i = 1; i <= 4; i++) {
		count += document.getElementById('user_eval_q9_' + i).checked ? 1 : 0;
		}

		if (count >= 1) {

 		for (i = 1; i <= 4; i++) {
		document.getElementById('user_eval_q9_' + i).disabled = !document.getElementById('user_eval_q9_' + i).checked;
		}
		} else {

		for (i = 1; i <= 4; i++) {
		document.getElementById('user_eval_q9_' + i).disabled = false;
		}
		}
		}

 	function TestGrp10() {
	var count = 0;
	var i =0;

		for (i = 1; i <= 4; i++) {
		count += document.getElementById('user_eval_q10_' + i).checked ? 1 : 0;
		}

		if (count >= 2) {
		for (i = 1; i <= 4; i++) {
		document.getElementById('user_eval_q10_' + i).disabled = !document.getElementById('user_eval_q10_' + i).checked;
		}
		} else {
		for (i = 1; i <= 4; i++) {
		document.getElementById('user_eval_q10_' + i).disabled = false;
		}
		}
		}
 </script>
