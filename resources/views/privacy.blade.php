<x-layouts.app>
    <div class="py-12">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="prose dark:prose-invert max-w-none">
                <h1>Privacy Policy</h1>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Effective Date: {{ date('F j, Y') }}
                </p>

                <h2>1. Introduction</h2>
                <p>
                    Welcome to {{ config('app.name') }}. We are committed to
                    protecting your personal information and your right to
                    privacy. This Privacy Policy explains how we collect, use,
                    disclose, and safeguard your information when you visit our
                    website.
                </p>

                <h2>2. Information We Collect</h2>
                <h3>Personal Information</h3>
                <p>
                    We may collect personal information that you voluntarily
                    provide to us when you register on the website, express an
                    interest in obtaining information about us or our products
                    and services, or otherwise contact us. This may include:
                </p>
                <ul>
                    <li>Name</li>
                    <li>Email address</li>
                    <li>Password (encrypted)</li>
                    <li>Profile information</li>
                </ul>

                <h3>Automatically Collected Information</h3>
                <p>
                    When you visit our website, we may automatically collect
                    certain information about your device, including:
                </p>
                <ul>
                    <li>IP address</li>
                    <li>Browser type</li>
                    <li>Operating system</li>
                    <li>Access times</li>
                    <li>Pages viewed</li>
                </ul>

                <h2>3. How We Use Your Information</h2>
                <p>We use the information we collect to:</p>
                <ul>
                    <li>Provide, operate, and maintain our website</li>
                    <li>Improve, personalize, and expand our website</li>
                    <li>Understand and analyze how you use our website</li>
                    <li>
                        Develop new products, services, features, and
                        functionality
                    </li>
                    <li>
                        Communicate with you for customer service and support
                    </li>
                    <li>Send you updates and other information</li>
                    <li>Process your transactions</li>
                    <li>Find and prevent fraud</li>
                </ul>

                <h2>4. Sharing Your Information</h2>
                <p>
                    We do not sell, trade, or rent your personal information to
                    third parties. We may share your information only in the
                    following situations:
                </p>
                <ul>
                    <li>With your consent</li>
                    <li>To comply with legal obligations</li>
                    <li>To protect our rights or property</li>
                    <li>
                        With service providers who assist in operating our
                        website
                    </li>
                </ul>

                <h2>5. Data Security</h2>
                <p>
                    We implement appropriate technical and organizational
                    security measures to protect your personal information
                    against unauthorized access, alteration, disclosure, or
                    destruction. However, no method of transmission over the
                    Internet or electronic storage is 100% secure.
                </p>

                <h2>6. Your Privacy Rights</h2>
                <p>You have the right to:</p>
                <ul>
                    <li>Access your personal information</li>
                    <li>Correct inaccurate data</li>
                    <li>Request deletion of your data</li>
                    <li>Object to processing of your data</li>
                    <li>Request data portability</li>
                </ul>

                <h2>7. Cookies</h2>
                <p>
                    We use cookies and similar tracking technologies to track
                    activity on our website and hold certain information. You
                    can instruct your browser to refuse all cookies or to
                    indicate when a cookie is being sent.
                </p>

                <h2>8. Third-Party Links</h2>
                <p>
                    Our website may contain links to third-party websites. We
                    are not responsible for the privacy practices or content of
                    these external sites.
                </p>

                <h2>9. Children's Privacy</h2>
                <p>
                    Our website is not intended for children under 13 years of
                    age. We do not knowingly collect personal information from
                    children under 13.
                </p>

                <h2>10. Changes to This Privacy Policy</h2>
                <p>
                    We may update this Privacy Policy from time to time. We will
                    notify you of any changes by posting the new Privacy Policy
                    on this page and updating the "Effective Date" at the top.
                </p>

                <h2>11. Contact Us</h2>
                <p>
                    If you have questions or concerns about this Privacy Policy,
                    please contact us at:
                </p>
                <p>
                    Email: privacy@{{ parse_url(config('app.url'), PHP_URL_HOST)
                    ?: 'example.com' }}
                </p>
            </div>
        </div>
    </div>
</x-layouts.app>
