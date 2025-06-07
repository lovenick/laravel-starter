<x-layouts.app>
    <div class="py-12">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="prose dark:prose-invert max-w-none">
                <h1>Terms and Conditions</h1>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Effective Date: {{ date('F j, Y') }}
                </p>

                <h2>1. Acceptance of Terms</h2>
                <p>
                    By accessing and using {{ config('app.name') }}, you accept
                    and agree to be bound by the terms and provision of this
                    agreement. If you do not agree to abide by the above, please
                    do not use this service.
                </p>

                <h2>2. Use License</h2>
                <p>
                    Permission is granted to temporarily download one copy of the
                    materials on {{ config('app.name') }} for personal,
                    non-commercial transitory viewing only. This is the grant of
                    a license, not a transfer of title, and under this license
                    you may not:
                </p>
                <ul>
                    <li>modify or copy the materials;</li>
                    <li>
                        use the materials for any commercial purpose or for any
                        public display;
                    </li>
                    <li>
                        attempt to reverse engineer any software contained on {{
                        config('app.name') }};
                    </li>
                    <li>
                        remove any copyright or other proprietary notations from
                        the materials.
                    </li>
                </ul>
                <p>
                    This license shall automatically terminate if you violate any
                    of these restrictions and may be terminated by {{
                    config('app.name') }} at any time. Upon terminating your
                    viewing of these materials or upon the termination of this
                    license, you must destroy any downloaded materials in your
                    possession whether in electronic or printed format.
                </p>

                <h2>3. User Account</h2>
                <p>
                    To access certain features of our service, you may be
                    required to create an account. You are responsible for:
                </p>
                <ul>
                    <li>
                        Maintaining the confidentiality of your account and
                        password
                    </li>
                    <li>
                        Restricting access to your computer and account
                    </li>
                    <li>
                        All activities that occur under your account
                    </li>
                    <li>
                        Ensuring that all information you provide is accurate
                        and current
                    </li>
                </ul>

                <h2>4. Prohibited Uses</h2>
                <p>You may not use our service:</p>
                <ul>
                    <li>
                        For any unlawful purpose or to solicit others to
                        perform unlawful acts
                    </li>
                    <li>
                        To violate any international, federal, provincial, or
                        state regulations, rules, laws, or local ordinances
                    </li>
                    <li>
                        To infringe upon or violate our intellectual property
                        rights or the intellectual property rights of others
                    </li>
                    <li>
                        To harass, abuse, insult, harm, defame, slander,
                        disparage, intimidate, or discriminate
                    </li>
                    <li>
                        To submit false or misleading information
                    </li>
                    <li>
                        To upload or transmit viruses or any other type of
                        malicious code
                    </li>
                    <li>
                        To interfere with or circumvent the security features of
                        the service
                    </li>
                </ul>

                <h2>5. Content</h2>
                <h3>Your Content</h3>
                <p>
                    Our service may allow you to post, link, store, share and
                    otherwise make available certain information, text, graphics,
                    videos, or other material. You are responsible for the
                    content that you post to the service, including its
                    legality, reliability, and appropriateness.
                </p>
                <p>
                    By posting content to the service, you grant us the right
                    and license to use, modify, publicly perform, publicly
                    display, reproduce, and distribute such content on and
                    through the service.
                </p>

                <h3>Content Restrictions</h3>
                <p>
                    You agree not to post content that:
                </p>
                <ul>
                    <li>Is unlawful, harmful, or offensive</li>
                    <li>Infringes on any third party's rights</li>
                    <li>Contains software viruses or malicious code</li>
                    <li>Is spam or unsolicited advertising</li>
                </ul>

                <h2>6. Privacy</h2>
                <p>
                    Your use of {{ config('app.name') }} is also governed by our
                    Privacy Policy. Please review our Privacy Policy, which also
                    governs the site and informs users of our data collection
                    practices.
                </p>

                <h2>7. Disclaimers</h2>
                <p>
                    The information on {{ config('app.name') }} is provided on an
                    "as is" basis. To the fullest extent permitted by law, this
                    website:
                </p>
                <ul>
                    <li>
                        excludes all representations and warranties relating to
                        this website and its contents
                    </li>
                    <li>
                        excludes all liability for damages arising out of or in
                        connection with your use of this website
                    </li>
                </ul>

                <h2>8. Limitations of Liability</h2>
                <p>
                    In no event shall {{ config('app.name') }}, nor its
                    directors, employees, partners, agents, suppliers, or
                    affiliates, be liable for any indirect, incidental, special,
                    consequential, or punitive damages, including without
                    limitation, loss of profits, data, use, goodwill, or other
                    intangible losses, resulting from your use of the service.
                </p>

                <h2>9. Indemnification</h2>
                <p>
                    You agree to defend, indemnify, and hold harmless {{
                    config('app.name') }} and its licensee and licensors, and
                    their employees, contractors, agents, officers and directors,
                    from and against any and all claims, damages, obligations,
                    losses, liabilities, costs or debt, and expenses (including
                    but not limited to attorney's fees).
                </p>

                <h2>10. Termination</h2>
                <p>
                    We may terminate or suspend your account and bar access to
                    the service immediately, without prior notice or liability,
                    under our sole discretion, for any reason whatsoever and
                    without limitation, including but not limited to a breach of
                    the Terms.
                </p>

                <h2>11. Governing Law</h2>
                <p>
                    These Terms shall be governed and construed in accordance
                    with the laws of the jurisdiction in which {{
                    config('app.name') }} operates, without regard to its
                    conflict of law provisions. Our failure to enforce any right
                    or provision of these Terms will not be considered a waiver
                    of those rights.
                </p>

                <h2>12. Changes to Terms</h2>
                <p>
                    We reserve the right, at our sole discretion, to modify or
                    replace these Terms at any time. If a revision is material,
                    we will provide at least 30 days notice prior to any new
                    terms taking effect.
                </p>

                <h2>13. Contact Information</h2>
                <p>
                    If you have any questions about these Terms and Conditions,
                    please contact us at:
                </p>
                <p>
                    Email: legal@{{ parse_url(config('app.url'), PHP_URL_HOST) ?:
                    'example.com' }}
                </p>
            </div>
        </div>
    </div>
</x-layouts.app>