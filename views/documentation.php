<?php

/**
 * Notes plugin for Wolf CMS <http://project79.net/projects/notes>
 * Available on Github <https://github.com/project79>
 *
 * Simple notes for admin area.
 *
 * @author Dejan Andjelkovic <dejan79@gmail.com>
 * @package Wolf
 * @subpackage plugin.notes
 * @version 0.0.8
 * @licence http://www.gnu.org/licenses/gpl.html
 * @copyright http://project79.net ,2010-2011
 */

if (!defined('IN_CMS')) { exit(); }


?>
<h1><?php echo __('Documentation'); ?></h1>

<h3>Welcome to Notes plugin.</h3>

<p>
    The purpose of this plugin is to:
</p>
<ul>
	<li>take notes within WolfCMS,</li>
	<li>make testimonials as notes and show them on the front end,</li>
	<li>pull one by one note anywhere on your site...</li>
</ul>
<p>
    I have created this because I'm toooo lazy to write notes on paper and I needed it for maintenance purposes.
	But it seems that since version 0.0.8 plugin can be used for various things.
</p>

<h2>Usage in Backend</h2>

<p>
    Well, it's pretty simple to use this plugin as it doesn't have to many options. All you can do for the moment is to:
</p>
<ul>
    <li>create new note</li>
    <li>edit and delete existing note</li>
    <li>view all notes</li>
</ul>
<p>
    For text styling use normal html tags.
</p>

<h2>Usage in Frontend</h2>

<h4>Showing all notes</h4>

<p>
	You can show all your notes at once anywhere within your site (Pages and Layouts) with this simple fuction:
</p>

<pre>
&lt;?php showallnotes(); ?&gt;
</pre>

<h4>Show only one note</h4>

<p>
	If you want to show only certain note somewhere (in sidebar for example), you just call it by id:
</p>

<pre>&lt;?php shownotebyid('ID'); ?&gt;</pre>

<p>In real life, that would be:</p>

<pre>&lt;?php shownotebyid('5'); ?&gt;</pre>

<h2>Styling your notes</h2>

<p>
	For now, styling is minimal and can be done just with css. Here are two id's, knock yourself out :)
</p>
<pre>
/* Notes are wrapped within div's and h3 is used for their titles
 * id for showing all notes
 */
#show-all-notes {}
#show-all-notes h3 {}

/* id for "standalone" note */
#show-note-by-id {}
#show-note-by-id h3 {}
</pre>

<h2>To Do</h2>
<p>
    As any other plugin, this one has plenty of room for improvement. Some of them are listed below:
</p>
<ul>
    <li>sorting by different criteria</li>
    <li>textile filter input</li>
    <li>categories</li>
</ul>

<h2>Issues and Wishes</h2>
<p>
    If you find any errors or you have idea on how to improve this plugin, visit my account on <a href="https://github.com/project79/Notes">Github</a> and post an issue.
</p>

<h2>Copyright and Licence</h2>
<p>
    Developement by Dejan Andjelkovic. Created and published on December 2010. Last update: May 2011<br />
    More info regarding plugin can be found on <a href="http://project79.net">Project 79</a> site under <em>/projects</em> area.<br />
    Licence: <a href="http://www.gnu.org/licenses/gpl.html">GPL</a>
</p>
