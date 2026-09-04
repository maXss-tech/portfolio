<?php
/**
 * ─────────────────────────────────────────────────────────
 *  SITE CONFIG
 *  Edit these values to personalise the portfolio.
 * ─────────────────────────────────────────────────────────
 */

define('SITE_OWNER',    'Angel Denzel Cordovez');
define('SITE_LOCATION', 'Manila, Philippines');
define('SITE_SCHOOL',   'NU Manila');           // your school name
define('SITE_EMAIL',    'denzelcordovez9@gmail.com');   // replace with real email
define('SITE_FB',       'https://facebook.com/denzelcordovez26');
define('SITE_LI',       'https://linkedin.com/in/denzel-cordovez');
define('SITE_YEAR',     date('Y'));

// ── SKILLS ──────────────────────────────────────────────
// icon = emoji, name = display name, desc = short line, pct = bar %
$skills = [
    ['icon'=>'🌐','name'=>'HTML & CSS',      'desc'=>'Semantic markup, responsive layouts, modern CSS.',          'pct'=>90],
    ['icon'=>'⚡','name'=>'JavaScript',       'desc'=>'DOM manipulation, fetch API, interactive UI.',              'pct'=>78],
    ['icon'=>'🐘','name'=>'PHP',              'desc'=>'Server-side scripting, form handling, backend logic.',      'pct'=>72],
    ['icon'=>'🗄️','name'=>'MySQL',            'desc'=>'Relational databases, queries, CRUD operations.',          'pct'=>68],
    ['icon'=>'🎨','name'=>'UI / UX Design',   'desc'=>'Clean layouts, Figma wireframes, user-centred thinking.',  'pct'=>65],
    ['icon'=>'🛠️','name'=>'Bootstrap / Git',  'desc'=>'Component frameworks, version control, deployment.',      'pct'=>70],
];

// ── SERVICES ─────────────────────────────────────────────
$services = [
    [
        'num'      => '01',
        'icon'     => '🎯',
        'name'     => 'Single-Page Landing Site',
        'target'   => 'For freelancers, small businesses & events',
        'features' => [
            'Custom responsive design',
            'Contact form with email notifications',
            'SEO-ready structure',
            'Fast load time optimised',
            'Mobile-first layout',
        ],
        'price' => '₱3,500 – ₱6,000',
    ],
    [
        'num'      => '02',
        'icon'     => '🏢',
        'name'     => 'Standard Multi-Page Site',
        'target'   => 'For established businesses & professionals',
        'features' => [
            'Up to 6 custom pages',
            'CMS or static (your choice)',
            'Gallery / portfolio section',
            'Google Maps integration',
            'Basic analytics setup',
        ],
        'price' => '₱7,000 – ₱15,000',
    ],
    [
        'num'      => '03',
        'icon'     => '🛒',
        'name'     => 'Basic E-Commerce Store',
        'target'   => 'For online sellers & product businesses',
        'features' => [
            'Product catalog & categories',
            'Shopping cart & checkout',
            'GCash / COD payment options',
            'Order management dashboard',
            'Inventory tracking',
        ],
        'price' => '₱16,000 – ₱30,000',
    ],
    [
        'num'      => '04',
        'icon'     => '⚙️',
        'name'     => 'Custom Web App / System',
        'target'   => 'For organisations & specific workflows',
        'features' => [
            'Full custom PHP + MySQL system',
            'User auth & role management',
            'Admin dashboard & reports',
            'API integrations',
            'Tailored to your exact process',
        ],
        'price' => '₱25,000 – ₱45,000',
    ],
];