  
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


<html>
<head>
<title>PHP-gettext examples</title>
</head>
<body>
<h1>PHP-gettext</h1>

<h2>Introduction</h2>
<p>PHP-gettext provides a simple gettext replacement that works independently from the system's gettext abilities.
It can read MO files and use them for translating strings.</p>
<p>This version has the ability to cache all strings and translations to speed up the string lookup. 
While the cache is enabled by default, it can be switched off with the second parameter in the constructor (e.g. when using very large MO files 
that you don't want to keep in memory)</p>


<h2>Examples</h2>
<ul>
	<li><a href="pigs_dropin.php">PHP-gettext as a dropin replacement</a></li>
	<li><a href="pigs_fallback.php">PHP-gettext as a fallback solution</a></li>
</ul>

<hr />
<p>Copyright (c) 2003-2006 Danilo Segan</p>
<p>Copyright (c) 2005-2006 Steven Armstrong</p>

</body>
</html>
