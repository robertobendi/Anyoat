<?php

/**
 * Anyo at Disenyo — content shape.
 *
 * The public site is a printed folio. Each primary section gets its own
 * collection so the editor can add plates / notes through the admin and the
 * public routes stay clean (/work, /journal, /practice, /inquiry).
 */

return [

    // Static landing-page entries. The home page renders home.twig directly
    // without a Page row; the rest of the site uses dedicated collections.
    'pages' => [
        'label'          => 'Pages',
        'label_singular' => 'Page',
        'icon'           => 'file',
        'route'          => '/page/{slug}',
        'template'       => 'page.twig',
        'order_by'       => 'updated_at DESC',
        'fields' => [
            'title'            => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'             => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'             => ['type' => 'markdown', 'label' => 'Body'],
            'meta_description' => ['type' => 'textarea', 'label' => 'Meta description'],
        ],
    ],

    // FOLIO — the work plates. Each project is a numbered plate in the folio.
    // Route /work renders the folio cover + plate sequence; /work/{slug}
    // opens a single plate page. Editor adds plates from admin.
    'plates' => [
        'label'          => 'Folio (Work)',
        'label_singular' => 'Plate',
        'icon'           => 'image',
        'route'          => '/work/{slug}',
        'template'       => 'plate.twig',
        'list_template'  => 'plate-list.twig',
        'order_by'       => 'publish_at DESC, updated_at DESC',
        'list_limit'     => 24,
        'fields' => [
            'plate_number' => ['type' => 'number', 'required' => true, 'label' => 'Plate number'],
            'title'        => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'         => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'location'     => ['type' => 'text', 'label' => 'Location', 'help' => 'e.g. Lipa, Batangas'],
            'year'         => ['type' => 'number', 'label' => 'Year'],
            'project_type' => ['type' => 'text', 'label' => 'Project type', 'help' => 'e.g. Residential, Small commercial'],
            'hero_image'   => ['type' => 'url', 'label' => 'Hero photo (URL from /admin/media)'],
            'plan_image'   => ['type' => 'url', 'label' => 'Plan drawing (URL)'],
            'body'         => ['type' => 'markdown', 'label' => 'Plate body'],
        ],
    ],

    // JOURNAL — short editorial notes. Route /journal renders the folio
    // cover + a numbered index; /journal/{slug} opens an individual note.
    'posts' => [
        'label'          => 'Journal',
        'label_singular' => 'Note',
        'icon'           => 'edit',
        'route'          => '/journal/{slug}',
        'template'       => 'post.twig',
        'list_template'  => 'post-list.twig',
        'order_by'       => 'publish_at DESC',
        'list_limit'     => 50,
        'fields' => [
            'title'   => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'    => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'eyebrow' => ['type' => 'text', 'label' => 'Eyebrow', 'help' => 'e.g. PLATE 01 — CLIMATE'],
            'excerpt' => ['type' => 'textarea', 'label' => 'Dek (one-line)'],
            'body'    => ['type' => 'markdown', 'required' => true, 'label' => 'Body'],
            'author'  => ['type' => 'text', 'label' => 'Author'],
        ],
    ],

    // PRACTICE — the page is fully rendered by practice.twig; the
    // collection exists only so /practice has a list route. The editor
    // can add team members later if needed.
    'practice' => [
        'label'          => 'Practice (team)',
        'label_singular' => 'Practitioner',
        'icon'           => 'user',
        'route'          => '/practice/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'practice.twig',
        'order_by'       => 'updated_at ASC',
        'list_limit'     => 12,
        'fields' => [
            'title' => ['type' => 'text', 'required' => true, 'label' => 'Name'],
            'slug'  => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'role'  => ['type' => 'text', 'label' => 'Role'],
            'bio'   => ['type' => 'markdown', 'label' => 'Bio'],
        ],
    ],

    // INQUIRY — list_template renders the inquiry page (form + routes).
    // The companion form collection below handles submissions.
    'inquiry' => [
        'label'          => 'Inquiry page',
        'label_singular' => 'Inquiry block',
        'icon'           => 'mail',
        'route'          => '/inquiry/{slug}',
        'template'       => 'page.twig',
        'list_template'  => 'inquiry.twig',
        'order_by'       => 'updated_at ASC',
        'list_limit'     => 4,
        'fields' => [
            'title' => ['type' => 'text', 'required' => true, 'label' => 'Title'],
            'slug'  => ['type' => 'slug', 'required' => true, 'label' => 'Slug'],
            'body'  => ['type' => 'markdown', 'label' => 'Body'],
        ],
    ],

    // Form endpoint — POST /forms/contact records submissions. The inquiry
    // template renders a form pointing here as a fallback when no Formspree
    // endpoint is configured.
    'contact' => [
        'label'          => 'Inquiries received',
        'label_singular' => 'Submission',
        'icon'           => 'inbox',
        'is_form'        => true,
        'fields' => [
            'name'            => ['type' => 'text',     'required' => true, 'label' => 'Name'],
            'contact'         => ['type' => 'text',     'required' => true, 'label' => 'Phone or email'],
            'project_location'=> ['type' => 'text',     'label' => 'Project location'],
            'project_type'    => ['type' => 'select',   'label' => 'Project type', 'options' => ['Residential', 'Small commercial', 'Renovation / addition', 'Other / not sure']],
            'preferred_route' => ['type' => 'select',   'label' => 'Preferred contact route', 'options' => ['Phone', 'Messenger', 'Email']],
            'message'         => ['type' => 'textarea', 'required' => true, 'label' => 'Brief description'],
        ],
    ],

];
