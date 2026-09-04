<?php
/**
 * ─────────────────────────────────────────────────────────
 *  PROJECTS DATA FILE
 *  Add, edit, or remove your projects here.
 *  No need to touch index.php at all.
 * ─────────────────────────────────────────────────────────
 *
 *  Each project is an array with these keys:
 *
 *  title  (string)  – Project name shown on the card
 *  desc   (string)  – Short description (1-2 sentences)
 *  tags   (array)   – Tech stack / labels e.g. ['PHP','MySQL','Bootstrap']
 *  img    (string)  – Image URL or path, e.g. 'assets/img/myproject.png'
 *                     Set to '' (empty string) to show a "Coming Soon" placeholder
 *  live   (bool)    – true  = shows "View Project →" link
 *                     false = shows "Work in Progress…"
 *  url    (string)  – Full URL to live project, ignored when live=false
 */

$projects = [

    [
        'title' => 'Sample Portfolio Site',
        'desc'  => 'A personal developer portfolio built with PHP, featuring a contact form, skill bars, and a smooth dark UI.',
        'tags'  => ['PHP', 'HTML/CSS', 'JavaScript'],
        'img'   => 'https://i.postimg.cc/vTtZvZM3/bce1d561-3267-41ff-bdf8-7915073b2caa.jpg',
        'live'  => false,
        'url'   => '',
    ],

    [
        'title' => 'Another Project',
        'desc'  => 'A brief description of what this project does and who it is for.',
        'tags'  => ['React', 'Node.js', 'MySQL'],
        'img'   => '',           // leave empty for "Coming Soon" placeholder
        'live'  => false,
        'url'   => '',
    ],

    // ── HOW TO ADD A NEW PROJECT ─────────────────────────
    // Copy the block below, fill in your details, done!
    //
    // [
    //     'title' => 'My New Project',
    //     'desc'  => 'What it does.',
    //     'tags'  => ['PHP', 'Bootstrap'],
    //     'img'   => 'assets/img/newproject.png',
    //     'live'  => true,
    //     'url'   => 'https://yourproject.com',
    // ],

];