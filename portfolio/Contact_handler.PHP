<?php
/**
 * ─────────────────────────────────────────────────────────
 *  CONTACT FORM HANDLER
 *  Handles AJAX POST from the contact form.
 *  Responds with JSON.
 * ─────────────────────────────────────────────────────────
 *
 *  InfinityFree uses PHP's mail() — make sure your hosting
 *  account has email sending enabled, or swap in an SMTP
 *  library like PHPMailer for reliable delivery.
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajax'])) {

    header('Content-Type: application/json; charset=utf-8');

    // ── Honeypot check ──
    if (!empty($_POST['website'])) {
        echo json_encode(['success' => false, 'message' => 'Spam detected.']);
        exit;
    }

    // ── Sanitise inputs ──
    $name    = trim(strip_tags($_POST['name']    ?? ''));
    $email   = trim(strip_tags($_POST['email']   ?? ''));
    $service = trim(strip_tags($_POST['service'] ?? ''));
    $message = trim(strip_tags($_POST['message'] ?? ''));

    // ── Validate ──
    $errors = [];
    if (empty($name))                        $errors[] = 'Name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
    if (empty($message))                     $errors[] = 'Message is required.';

    if ($errors) {
        echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
        exit;
    }

    // ── Send email ──
    $to      = SITE_EMAIL;
    $subject = "Portfolio Contact: {$name}";
    $body    = "Name: {$name}\nEmail: {$email}\nService: {$service}\n\nMessage:\n{$message}";
    $headers = "From: noreply@" . ($_SERVER['HTTP_HOST'] ?? 'portfolio.local') . "\r\n"
             . "Reply-To: {$email}\r\n"
             . "X-Mailer: PHP/" . PHP_VERSION;

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['success' => true,  'message' => 'Message sent! I\'ll get back to you soon.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Mail server error. Please email me directly.']);
    }

    exit;
}