<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id'            => '5',
                'slug'          => 'releases',
                'title'         => 'Releases',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'id'            => '6',
                'slug'          => 'envoyer',
                'title'         => 'Envoyer',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'id'            => '7',
                'slug'          => 'forge',
                'title'         => 'Forge',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'id'            => '8',
                'slug'          => 'vapor',
                'title'         => 'Vapor',
                'created_at'    => now(),
                'updated_at'    => now()
            ]
        ];

        $users = [
            [
                'name'          => 'James Brooks',
                'email'         => 'jb@laravel.ll',
                'password'      => '$2y$10$gVeHvqzAEZrGwrYmUbSD2u6AnW9jXcz.Pod6x3QuuyVFZ8CH0As1y',
                'created_at'    => now(),
                'updated_at'    => now()
            ]
        ];

        $posts = [
            [
                'slug'              => 'laravel-ecosystem-including-laravel-forge-and-vapor-is-php-81-ready',
                'title'             => 'Laravel ecosystem — including Laravel, Forge, and Vapor — is PHP 8.1 ready',
                'content'           => "<p>PHP 8.1 was released yesterday and includes many new features and improvements, including Enums,&nbsp;<code>new</code>&nbsp;in initializers,&nbsp;<code>readonly</code>&nbsp;properties, and much more.</p><p>You can find out more about the most exciting features in&nbsp;<strong><a href='https://www.youtube.com/watch?v=Qd0486iVt8o'>our YouTube video</a></strong>.</p><p>Now, as you may have noticed in the past few weeks, we ensured that Laravel, first-party libraries, Forge, Envoyer, Nova, and Vapor can support PHP 8.1 on day one. So, let&#39;s take a look at what you need to do in order to start using PHP 8.1.</p><h3>Laravel</h3><p>If you plan to use PHP 8.1 on&nbsp;<a href='https://laravel.com/'>Laravel</a>, ensure you&#39;re at the latest version of Laravel. In addition, make sure you&#39;re on the latest version of any first-party package from Laravel such as Passport, Cashier, Dusk, etc.</p><p><img alt='image' src='https://laravel-blog-assets.s3.amazonaws.com/QDTNyC4c6mgpi3OF8KQxPCLuxt9BkNn5S66fK8la.png' title='laravel' /></p><h3>Forge</h3><p>If you use&nbsp;<a href='https://forge.laravel.com/'>Forge</a>&nbsp;to provision and deploy your application, you may now choose PHP 8.1 when creating a new server.</p><p><img alt='image' src='https://laravel-blog-assets.s3.amazonaws.com/qkM2ct3hHmt8pORXDYufQMcN7s35tz4PTsNE4Rcw.png' title='forge1' /></p><p>And, of course, you may install PHP 8.1 on your existing servers via the &quot;PHP Versions&quot; tab on the server&#39;s management dashboard.</p><p><img alt='image' src='https://laravel-blog-assets.s3.amazonaws.com/9kfYshlgitNzuSX6nUDQGdLjwkZVFwK8n2W65sMo.png' title='forge2' /></p><h3>Envoyer</h3><p>Next, if you use&nbsp;<a href='https://envoyer.io/'>Envoyer</a>&nbsp;for your application&#39;s deployments, you may now select PHP 8.1 from your server&#39;s settings.</p><p><img alt='image' src='https://laravel-blog-assets.s3.amazonaws.com/mfHUvxnJUBvkd2nOIDMKP9Sdyi5whLJZzlq2Dvj3.png' title='envoyer' /></p><h3>Vapor</h3><p>If you are running a serverless Laravel application using&nbsp;<a href='https://vapor.laravel.com/'>Vapor</a>, simply specify&nbsp;<code>php-8.1:al2</code>&nbsp;as your preferred runtime in your application&#39;s&nbsp;<code>vapor.yml</code>&nbsp;configuration file:</p><p><img alt='image' src='https://laravel-blog-assets.s3.amazonaws.com/LgkC8kshGryLMcUymnqXm9hNTDcXqRiW0BblMYv0.png' title='vapor' /></p><p>If you are using Docker-based deployments, you may use our&nbsp;<code>laravelphp/vapor:php81</code>&nbsp;docker image. However, this image is still using PHP 8.1 RC6, as Alpine images do not use PHP 8.1&#39;s stable version at the time of this writing.</p><p>Once you deploy, your environment will automatically start using PHP 8.1 with zero downtime.</p><hr /><p>At Laravel, we&#39;re committed to providing you with the&nbsp;<strong>most robust, modern, and developer-friendly PHP experience in the world</strong>. We hope you are as excited about PHP 8.1 as we are.</p>",
                'preview_image'     => 'images/9ynsNDWGBjUkYvMnCXKXDF0joemoQlvjTZctw0eZ.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'forge-mariadb-106-and-postgresql-14',
                'title'             => 'Forge: MariaDB 10.6 and PostgreSQL 14',
                'content'           => '<p>We&#39;re happy to announce the immediate availability of&nbsp;<a href="https://mariadb.com/kb/en/changes-improvements-in-mariadb-106/">MariaDB 10.6</a>&nbsp;and&nbsp;<a href="https://www.postgresql.org/about/news/postgresql-14-released-2318/">PostgreSQL 14</a>&nbsp;database versions on Laravel Forge.</p><p>MariaDB 10.6 has replaced 10.3 as the default MariaDB version in Forge. Servers that were provisioned with MariaDB 10.3 will continue to run 10.3. New servers will now install 10.6.</p><p>If you don&rsquo;t have a Forge account, now is a great time to&nbsp;<a href="https://forge.laravel.com/">sign up</a>! Forge allows you to painlessly create and manage PHP servers which include MySQL, Redis, Memcached, database backups, and everything else you need to run robust, modern Laravel applications.</p>',
                'preview_image'     => 'images/F4ynT7kptYhUuuIZCtzSG0VNKMwNy5BVVwfurHi6.jpg',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'vapor-php-81-release-candidate-is-now-supported',
                'title'             => 'Vapor: PHP 8.1 Release Candidate Is Now Supported',
                'content'           => '<p>Starting today, you may use PHP 8.1 Release Candidates in your Vapor environments. To get started, simply specify&nbsp;<code>php-8.1:al2</code>&nbsp;as your preferred runtime in your&nbsp;<code>vapor.yml</code>&nbsp;configuration file.</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/79AbfjweuS7Pzb8oGHelkcQRDMfP6tibAnoewdwu.png" title="yaml" /></p><p>If your application is using Docker runtimes, we hope to release PHP 8.1 support for your environment within the next week or two.</p><p>In addition, some Vapor features, PHP features, and PHP extensions may not work as expected when running environments on PHP 8.1. And of course, soon as PHP 8.1 receives a stable release, your environment will automatically start using PHP 8.1&#39;s stable version after a subsequent deployment.</p><p>We hope you enjoy PHP 8.1 in your Vapor projects. At Laravel, we&#39;re committed to providing you with the most robust and developer-friendly PHP experience in the world. If you haven&#39;t checked out Vapor, now is a great time to start! You can create your account today at:&nbsp;<strong><a href="https://vapor.laravel.com/">vapor.laravel.com</a></strong>.</p>',
                'preview_image'     => 'images/4aJmprU9u0OvhVd5hvwFpwu9Nl4c2BiZbsZvpD0Q.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'forge-php-81-release-candidate-is-now-supported',
                'title'             => 'Forge: PHP 8.1 Release Candidate Is Now Supported',
                'content'           => '<p>Starting today, you may install PHP 8.1 Release Candidates by choosing &quot;PHP 8.1 RC&quot; while creating a new server. Or, you may install the release candidate on an existing server via the PHP tab on a server&#39;s management dashboard.</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/9cTvTlkaCqQDwLoHfna8150XUFmmZrVDOTM6DuDi.png" title="php" /></p><p>Some Forge features, PHP features, and PHP extensions may not work as expected when combined with PHP 8.1. In addition, once that PHP version becomes stable, you will need to fully uninstall and re-install PHP 8.1 via the PHP tab on a server&#39;s management dashboard.</p><p>If you don&rsquo;t have a Forge account, now is a great time to&nbsp;<strong><a href="https://forge.laravel.com/">sign up</a></strong>! Forge allows you to painlessly create and manage PHP servers which include MySQL, Redis, Memcached, database backups, and everything else you need to run robust, modern Laravel applications.</p>',
                'preview_image'     => 'images/6xIfveI06HHuGMecrYLlCZah8lxyps70OoOAhK8N.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'vapor-octane-support-is-now-available',
                'title'             => 'Vapor: Octane Support Is Now Available',
                'content'           => '<p>Today we&#39;re pleased to announce that&nbsp;<strong><a href="https://laravel.com/docs/8.x/octane">Octane</a></strong>&nbsp;support is now available in Laravel Vapor. The speed improvements are just mind-blowing, so put on your seat belt and let&#39;s get into the details.</p>

                <p>If you haven&#39;t heard about Octane, it&#39;s a Laravel library that supercharges your application&#39;s performance by booting your application once, keeping it in memory, and then feeding it requests at supersonic speeds.</p>
                
                <p>Now, when combining Octane with Vapor&#39;s on-demand auto-scaling, you get blazing-fast load times at any scale. Let&#39;s take a look at some numbers using a Vapor project on the Amazon&#39;s&nbsp;<code>us-west-1</code>&nbsp;region. This Vapor application is configured with 1024 MB of RAM and an RDS MySQL instance (db.t2.micro) with 1 VCPU and 1Gib RAM.</p>
                
                <p>First, let&#39;s take a look at an API endpoint that gets a user from the database. Using Octane, this endpoint is&nbsp;<strong>7x faster and uses 44% less memory:</strong></p>
                
                <pre>
                <code># Before Vapor&#39;s Octane integration
                Request Duration: 39.40 ms, Memory Used: 169 MB
                Request Duration: 40.20 ms, Memory Used: 169 MB
                Request Duration: 37.71 ms, Memory Used: 169 MB
                Request Duration: 42.16 ms, Memory Used: 169 MB
                Request Duration: 40.60 ms, Memory Used: 169 MB
                Request Duration: 45.75 ms, Memory Used: 169 MB
                
                # After Vapor&#39;s Octane integration
                Request Duration: 6.78 ms, Memory Used: 112 MB
                Request Duration: 6.64 ms, Memory Used: 112 MB
                Request Duration: 6.67 ms, Memory Used: 112 MB
                Request Duration: 6.38 ms, Memory Used: 112 MB
                Request Duration: 6.75 ms, Memory Used: 112 MB
                Request Duration: 6.47 ms, Memory Used: 112 MB
                </code></pre>
                
                <p>Next, let&#39;s take a look at a &quot;login&quot; route which renders a static template. Using Octane, this endpoint is almost&nbsp;<strong>3x faster and uses 35% less memory:</strong></p>
                
                <pre>
                <code># Before Vapor&#39;s Octane integration
                Request Duration: 11.32 ms, Memory Used: 165 MB
                Request Duration: 11.35 ms, Memory Used: 165 MB
                Request Duration: 11.29 ms, Memory Used: 165 MB
                Request Duration: 11.29 ms, Memory Used: 165 MB
                Request Duration: 11.36 ms, Memory Used: 165 MB
                Request Duration: 11.43 ms, Memory Used: 165 MB
                
                # After Vapor&#39;s Octane integration
                Request Duration: 4.89 ms, Memory Used: 108 MB 
                Request Duration: 4.89 ms, Memory Used: 108 MB 
                Request Duration: 4.83 ms, Memory Used: 108 MB 
                Request Duration: 4.66 ms, Memory Used: 108 MB 
                Request Duration: 4.79 ms, Memory Used: 108 MB 
                Request Duration: 4.91 ms, Memory Used: 108 MB
                </code></pre>
                
                <p>As you can see, using Octane decreases both request duration and memory usage. And, of course, because AWS applies 1ms billing granularity on Lambda, you will pay less for your HTTP function.</p>
                
                <h2>How to get started</h2>
                
                <p>First, ensure you are using latest version of Laravel, Vapor Core, and Vapor CLI:</p>
                
                <ul>
                    <li>Laravel Framework: ^8.62.0</li>
                    <li>Vapor Cli: ^1.26.0</li>
                    <li>Vapor Core: ^2.14.0</li>
                </ul>
                
                <p>Next, install Octane in your Vapor project. Octane may be installed via the Composer package manager:</p>
                
                <pre>
                <code>composer require laravel/octane
                </code></pre>
                
                <p>After installing Octane, you may execute the&nbsp;<code>octane:install</code>&nbsp;Artisan command, which will install Octane&#39;s configuration file into your application:</p>
                
                <pre>
                <code>php artisan octane:install
                </code></pre>
                
                <p>Next, if you haven&#39;t tried Octane before in your application, you may want to test it locally. Of course, don&#39;t forget to review important&nbsp;<a href="https://laravel.com/docs/8.x/octane">Octane documentation</a>&nbsp;topics such as&nbsp;<a href="https://laravel.com/docs/8.x/octane#dependency-injection-and-octane">dependency injection</a>&nbsp;and&nbsp;<a href="https://laravel.com/docs/8.x/octane#managing-memory-leaks">managing memory leaks</a>.</p>
                
                <p>Finally, you may instruct Vapor to use Octane by setting the&nbsp;<code>octane</code>&nbsp;configuration option within your application&#39;s&nbsp;<code>vapor.yml</code>&nbsp;file:</p>
                
                <pre>
                <code>id: 1
                name: my-application
                environments:
                    staging:
                        memory: 1024
                        runtime: &#39;php-8.0:al2&#39;
                        octane: true
                </code></pre>
                
                <p>In addition, if your project uses a database, you may use the&nbsp;<code>octane-database-session-persist</code>&nbsp;and&nbsp;<code>octane-database-session-ttl</code>&nbsp;options to instruct Octane that database connections should be reused between requests:</p>
                
                <pre>
                <code>        database: my-database
                        octane: true
                        octane-database-session-persist: true
                        octane-database-session-ttl: 10
                </code></pre>
                
                <ul>
                    <li>The&nbsp;<code>octane-database-session-persist</code>&nbsp;option indicates that database connections should persist between requests. The main purpose of this option is to reduce the overhead involved on creating a database connection on each request.</li>
                    <li>The&nbsp;<code>octane-database-session-ttl</code>&nbsp;option allows specifying the time (in seconds) the Lambda container should stay connected to the database when the Lambda container is not being used.</li>
                </ul>
                
                <p><strong>We recommended that you specify an&nbsp;<code>octane-database-session-ttl</code>&nbsp;value</strong>; otherwise, the Lambda container will stay connected to your database until the Lambda container gets destroyed. This may take several minutes and may result in your database becoming overwhelmed with active connections.</p>
                
                <p>Please review&nbsp;<a href="https://docs.vapor.build/1.0/projects/environments.html#octane">Vapor&#39;s Octane integration documentation</a>&nbsp;for more details.</p>
                
                <h2>Conclusion</h2>
                
                <p>Also, we would like to thanks&nbsp;<a href="https://twitter.com/aarondfrancis">Aaron Francis</a>, for the proposal and&nbsp;<a href="https://github.com/laravel/octane/issues/340">initial exploration</a>&nbsp;on having Octane on Vapor. We care and study every proposal made by the community.</p>
                
                <p>We hope you enjoy this new feature. At Laravel, we&#39;re committed to providing you with the most robust and developer-friendly PHP experience in the world. If you haven&#39;t checked out Vapor, now is a great time to start! You can create your account today at:&nbsp;<strong><a href="https://vapor.laravel.com/">vapor.laravel.com</a></strong>.</p>',
                'preview_image'     => 'images/upddbotmxQm6FE6smD4OyBAWUWEHY207mVdKvoZ9.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'forge-lets-encrypt-compatibility-changes',
                'title'             => 'Forge: Let\'s Encrypt Compatibility Changes',
                'content'           => '<p>On Thursday, September 30th there will be a small change in how older browsers and devices will treat&nbsp;<a href="https://letsencrypt.org/" rel="noopener noreferrer">Let&#39;s Encrypt</a>&#39;s certificates. While most sites will be unaffected,&nbsp;<strong>it will likely impact you if you&#39;re providing an API or support IoT devices</strong>.</p><h2>TL;DR:</h2><ul><li>Let&#39;s Encrypt&#39;s&nbsp;<em>DST Root CA X3</em>&nbsp;root certificate will expire on September 30th, but Let&#39;s Encrypt&#39;s newer&nbsp;<em>ISRG Root X1</em>&nbsp;root certificate has already been deployed, meaning all sites will automatically keep working on all relatively modern devices.</li><li>A lot of older devices, however, will stop working, as they haven&#39;t been receiving updates (meaning: they aren&#39;t aware that&nbsp;<em>ISRG Root X1</em>&nbsp;is a trusted root certificate).</li><li>There is a workaround for older Android versions, which Let&#39;s Encrypt have implemented. It works by keeping the expired&nbsp;<em>DST Root CA X3</em>&nbsp;certificate active as well.</li><li>Because this Android workaround is enabled by default, some versions of OpenSSL/GnuTLS/LibreSSL (which are used on lots of IoT devices) will start failing on September 30th due to a bug.</li><li>The way to work around this bug is to &quot;prefer&quot; the&nbsp;<em>ISRG Root X1</em>&nbsp;certificate, which&nbsp;<a href="https://forge.laravel.com/" rel="noopener noreferrer">Forge</a>&nbsp;now supports, but doing so disables the Android workaround.</li></ul><h2>What is changing?</h2><p>In short, Let&#39;s Encrypt&#39;s cross-signed&nbsp;<strong>DST Root CA X3</strong>&nbsp;certificate is about to expire. This certificate has been around&nbsp;<a href="https://letsencrypt.org/2015/10/19/lets-encrypt-is-trusted.html" rel="noopener noreferrer">since their launch back in October 2015</a>, with almost every device (and browser) being able to rely on it.</p><p>Fortunately, Let&#39;s Encrypt has&nbsp;<a href="https://letsencrypt.org/2020/11/06/own-two-feet.html" rel="noopener noreferrer">been hard at work ever since their launch</a>, and have created their own root certificate called &quot;<strong>ISRG Root X1</strong>&quot;. By working together with all major browsers and operating system developers, this certificate has since been included in&nbsp;<a href="https://letsencrypt.org/docs/certificate-compatibility/" rel="noopener noreferrer">pretty much all modern devices</a>.</p><p>On May 4th, Let&#39;s Encrypt&nbsp;<a href="https://community.letsencrypt.org/t/production-chain-changes/150739" rel="noopener noreferrer">already deployed the necessary changes</a>, and have been serving a combination that includes both this new&nbsp;<strong>ISRG Root X1&nbsp;</strong>certificate, as well as the expiring&nbsp;<strong>DST Root CA X3&nbsp;</strong>certificate. This way, modern browsers that are aware and trust this new&nbsp;<strong>ISRG Root X1</strong>&nbsp;certificate will use this, while older browsers that don&#39;t know / don&#39;t trust this certificate (due to not receiving software updates that includes it) can still use the&nbsp;<strong>DST Root CA X3&nbsp;</strong>until it expires on September 30th.</p><h2>(Part of) The Problem</h2><p><strong>Once this</strong>&nbsp;<strong><em>DST Root CA X3</em>&nbsp;does expire on September 30th, a wide range of&nbsp;</strong><a href="https://letsencrypt.org/docs/certificate-compatibility/" rel="noopener noreferrer"><strong>older devices</strong></a><strong>&nbsp;that haven&#39;t been receiving software updates to include the new&nbsp;<em>ISRG Root X1</em>&nbsp;certificate, will suddenly be unable to make requests to Let&#39;s Encrypt secured websites &amp; API&#39;s.</strong></p><p>While there is a limited workaround for Android (see below), our recommendation is to do either of the following things&nbsp;<strong><em>if you absolutely need&nbsp;</em>to</strong>&nbsp;support devices running old operating systems such as the iPhone 4 or Ubuntu 14.02:</p><ul><li>Purchase your own SSL certificate (from a different supplier, such as Comodo) and use that instead of Let&#39;s Encrypt.</li><li>Manually&nbsp;<a href="https://crt.sh/?d=9314791" rel="noopener noreferrer">import the new&nbsp;<em>ISRG Root X1</em>&nbsp;certificate</a>&nbsp;into the affected device&#39;s certificate Key Store.</li><li>Use an up-to-date version of Firefox, which uses it&#39;s own built-in Key Store instead of the one provided/included with the Operating System.</li></ul><p>With that said,&nbsp;<strong>the by-far best solution to this problem</strong>&nbsp;is to instead&nbsp;<strong>take the opportunity to drop support for these devices altogether</strong>. While this might seem like a&nbsp;<em>harsh&nbsp;</em>choice, the fact that these devices haven&#39;t received the&nbsp;<em>ISRG Root X1</em>&nbsp;certificate as part of their updates almost certainly also indicates that they haven&#39;t been receiving other important security updates either.</p><p><em>This means that the continued use of such devices isn&#39;t just a potential risk to the end-user that visits your website(s) and uses your platform(s), but it could also negatively impact your website/platform/company&#39;s reputation in the event that their device being hacked leads to their credentials being used maliciously to (for example) extract private data from your platform or to perform actions such as the permanent deletion of data.</em></p><h2><strong>A workaround for Android</strong></h2><p>Due to a design decision in Android &nbsp;(&gt;=&nbsp;<a href="https://en.wikipedia.org/wiki/Android_Gingerbread" rel="noopener noreferrer">2.3.6</a>&nbsp;&amp;&amp; &lt;=&nbsp;<a href="https://en.wikipedia.org/wiki/Android_Nougat" rel="noopener noreferrer">7.1.1</a>), certificates that are considered to be so-called &#39;trust anchors&#39; remain valid even after they are considered expired.</p><p>This means that if Let&#39;s Encrypt keeps using the expired&nbsp;<strong>DST Root CA X3&nbsp;</strong>certificate after September 30th, those versions of Android will remain able to visit Let&#39;s Encrypt secured websites&nbsp;<a href="https://letsencrypt.org/2020/12/21/extending-android-compatibility.html" rel="noopener noreferrer">until early 2024</a>, and&nbsp;<a href="https://letsencrypt.org/2020/12/21/extending-android-compatibility.html" rel="noopener noreferrer">that&#39;s exactly what they&#39;ve decided to do by default</a>.</p><p>Great! Maximum compatibility. Problem solved! 🚀</p><h2>.. yet another problem (for IoT devices)</h2><p>While the decision to support legacy Android devices by including the expired certificate is a great one, its continued inclusion unfortunately causes another problem:</p><p><a href="https://community.letsencrypt.org/t/openssl-client-compatibility-changes-for-let-s-encrypt-certificates/143816" rel="noopener noreferrer">Due to a bug</a>&nbsp;in some versions of&nbsp;<a href="https://community.letsencrypt.org/t/openssl-client-compatibility-changes-for-let-s-encrypt-certificates/143816" rel="noopener noreferrer">OpenSSL (1.0.0 - 1.0.2)</a>,&nbsp;<a href="https://lists.gnupg.org/pipermail/gnutls-help/2020-June/004648.html" rel="noopener noreferrer">GnuTLS (&lt; 3.6.14)</a>,&nbsp;<a href="https://ftp.openbsd.org/pub/OpenBSD/LibreSSL/libressl-3.2.0-relnotes.txt" rel="noopener noreferrer">LibreSSL (&lt; 3.2.0)</a>&nbsp;and perhaps other TLS/SSL libraries as well, Let&#39;s Encrypt&#39;s certificates will be seen as invalid as a result of this invalid DST Root CA X3 certificate still being included.</p><p><strong>This might cause problems for a lot of IoT devices, as these devices more often than not do not receive software updates and likely still rely on these libraries.</strong></p><h2><strong>The Solution</strong></h2><p><img alt="" src="https://laravel-blog-assets.s3.amazonaws.com/8QNf0Rw2aXokfEawUqHinmwUuBQ48MbBZTh7oiou.png" /></p><p>To solve this issue, today&#39;s release of&nbsp;<a href="https://forge.laravel.com/" rel="noopener noreferrer">Laravel Forge</a>&nbsp;gives you the ability to make a choice, and explicitly allows you to&nbsp;<strong><em>Prefer the &quot;ISRG Root X1 Chain&quot;</em></strong><em>.</em></p><p>By selecting this option, Forge will instruct Let&#39;s Encrypt to only create a certificate for the&nbsp;<em>ISRG Root X1</em>&nbsp;certificate, and to not include the&nbsp;<em>DST Root CA X3&nbsp;</em>certificate. This has a couple of effects:</p><ul><li>The certificate chain is shorter, more efficient, and the SSL handshake is faster.</li><li>Better IoT-device compatibility (the aforementioned OpenSSL bug is avoided)</li><li><strong>Android &nbsp;(&gt;=&nbsp;</strong><a href="https://en.wikipedia.org/wiki/Android_Gingerbread" rel="noopener noreferrer"><strong>2.3.6</strong></a><strong>&nbsp;&amp;&amp; &lt;=&nbsp;</strong><a href="https://en.wikipedia.org/wiki/Android_Nougat" rel="noopener noreferrer"><strong>7.1.1</strong></a><strong>) users will not be able to visit your website.</strong></li></ul><p>While all of the above might seem like&nbsp;<em>pros</em>&nbsp;rather than&nbsp;<em>cons</em>, do keep in mind that there is still a large volume of Android users (<a href="https://letsencrypt.org/2020/11/06/own-two-feet.html" rel="noopener noreferrer">roughly 30%</a>) that are using devices&nbsp;<em>without&nbsp;</em>a way to upgrade to a compatible version. As such, at least for now, both we as well as Let&#39;s Encrypt themselves are recommending against using this option for most people.</p><hr /><p>If you don&rsquo;t have a Forge account, now is a great time to&nbsp;<a href="https://forge.laravel.com/auth/register" rel="noopener noreferrer"><strong>sign up</strong></a>! Forge allows you to painlessly create and manage PHP servers which include MySQL, Redis, Memcached, database backups, and everything else you need to run robust, modern Laravel applications.</p>',
                'preview_image'     => 'images/UBXJIBYWZTXoS78ihT9DVcty0Ypg9PuVJCQ6LVbP.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'envoyer-transfer-projects',
                'title'             => 'Envoyer: Transfer Projects',
                'content'           => '<p>Starting today, it&#39;s possible for project owners to transfer projects to another Envoyer account. Collaborators will not be able to transfer a project away from its owner.</p><p>Project transfers may be initiated from the project&#39;s settings page:</p><p><img alt="The &quot;Transfer Project&quot; panel" src="https://laravel-blog-assets.s3.amazonaws.com/zPiHAMPIPEAFvhUtKJGTk98qTdwJdeLH4SOSRmHQ.png" /></p><p>The &quot;Transfer Project&quot; panel</p><p>Projects may only be transferred to existing Envoyer accounts. Recipients will need an active subscription&nbsp;<strong>and</strong>&nbsp;be connected to the same source control provider as the project to be transferred.</p><p><img alt="Accepting a project transfer request" src="https://laravel-blog-assets.s3.amazonaws.com/1JFxsFJrBTy4zZQr7nQ2UEH1ihCYaTbOyfsdlc0w.png" /></p><p>Accepting a project transfer request</p><p>If you don&rsquo;t have a&nbsp;<a href="https://envoyer.io/" rel="noopener noreferrer"><strong>Envoyer</strong></a>&nbsp;account, now is a great time to sign up! Envoyer allows you to deploy with zero-downtime, so your sites remain available all of the time.</p>',
                'preview_image'     => 'images/oE4nRC8aLfjyHigH0c3ApOBDsEPry03K7dcmUr91.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'forge-introducing-the-forge-cli',
                'title'             => 'Forge: Introducing The Forge CLI',
                'content'           => '<p>Today we&#39;re proud to introduce you to our new command-line tool:&nbsp;<strong><a href="https://github.com/laravel/forge-cli">Forge CLI</a></strong>. This new open-source tool provides a number of helpful commands that can assist you in managing your Forge servers, sites, and resources from the command-line.</p><p><a href="https://forge.laravel.com/docs/1.0/accounts/cli.html#installation">Once you install Forge CLI</a>, you may run&nbsp;<code>forge</code>&nbsp;from the command-line to get started:</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/calgv5adNgepUWrx16Mp2Ci5uHUQYyBpy0ZDYoG7.png" title="forge" /></p><p>The first release (v1.0) of the Forge CLI contains around thirty commands, including initiating deployments, viewing application logs, configuring SSH key authentication, and more. In this article, we are going to highlight some of these new commands. And, of course, you may refer to the&nbsp;<strong><a href="https://forge.laravel.com/docs/1.0/accounts/cli.html">official documentation</a></strong>&nbsp;for more details.</p><h3>Initiating Deployments</h3><p>One of the primary features of Laravel Forge is deployments, and now those may be initiated via the Forge CLI using the&nbsp;<code>deploy</code>&nbsp;command:</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/6leQsEMOItsN64hoK2K3hQkJ4VqmIypm3mmuNjDF.png" title="forge-deploy" /></p><h3>Viewing Application Logs</h3><p>You may also view site logs directly from the command-line. To do so, use the&nbsp;<code>site:logs</code>&nbsp;command:</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/1W4B1DiY28tJdYMVIzs0TK2NeahGj4nMSpDDeCsW.png" title="forge-site-logs" /></p><h3>Configuring SSH Key Authentication</h3><p>To configure SSH key authentication, you may use the&nbsp;<code>ssh:configure</code>&nbsp;command:</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/4Rz6rN8KOh7BoIrNGJRKMwcuQjTp1pnZC8uaaXQ9.png" title="forge-ssh-configure" /></p><p>After you have configured SSH key authentication, you may use the&nbsp;<code>ssh</code>&nbsp;command to quickly create a secure connection to your server:</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/q6fuEh4hK4P9V1I2Rek1FzLJNlpP0OqVuiuZR0SP.png" title="forge-ssh" /></p><h3>Connecting To A Database Locally</h3><p>You may even use the&nbsp;<code>database:shell</code>&nbsp;command to quickly access a command-line shell that lets you interact with your database:</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/NNGUTSt6vNGKUyiME6fHku0BGmyKbPbg7CAKqscG.png" title="forge-database-shell" /></p><hr /><p>Be sure to check out the&nbsp;<a href="https://forge.laravel.com/docs/1.0/accounts/cli.html">official Forge CLI documentation</a>&nbsp;for more details. There you will find a listing of all of the available commands and options. We hope you enjoy this new command-line tool!</p><p>If you don&rsquo;t have a Forge account, now is a great time to&nbsp;<strong><a href="https://forge.laravel.com/auth/register">sign up</a></strong>! Forge allows you to painlessly create and manage PHP servers which include MySQL, Redis, Memcached, database backups, and everything else you need to run robust, modern Laravel applications.</p>',
                'preview_image'     => 'images/Cycv9OMUHLGJD29KwZYXUqiBewCYgWwvyakauaFG.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'forge-infrastructure-upgrades',
                'title'             => 'Forge: Infrastructure Upgrades',
                'content'           => '<p>On July 7th, we made infrastructure upgrades on Laravel Forge to increase its stability and capacity. Due to the upgrades, we&#39;ve updated the list of IP Addresses that may SSH into your server.</p><p>If you are restricting SSH access to our Forge servers using IP allow lists, you should now allow the&nbsp;<a href="https://forge.laravel.com/docs/1.0/introduction.html#forge-ip-addresses">following IP addresses</a>:</p><ul><li>159.203.161.246</li><li>159.203.163.240</li><li>68.183.145.91</li></ul><p>The IP Address&nbsp;<code>68.183.145.91</code>&nbsp;was added to the previous list of IP addresses, and, as usual, you can also access the IP addresses via the following URL:&nbsp;<a href="https://forge.laravel.com/ips-v4.txt">forge.laravel.com/ips-v4.txt</a>.</p><p><strong>Deployments won&#39;t be affected by these infrastructure upgrades</strong>, but some Forge UI features, such as modifying the project&#39;s environment variables, may require SSH access to your server from the new IP Address.</p><p>If you don&rsquo;t have a Forge account, now is a great time to&nbsp;<a href="https://forge.laravel.com/auth/register">sign up</a>! Forge allows you to painlessly create and manage PHP servers which include MySQL, Redis, Memcached, database backups, and everything else you need to run robust, modern Laravel applications.</p>',
                'preview_image'     => 'images/iDDoHqJu2IpEqT8nAJAdGVhdwEQKhhGbydF7344n.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'vapor-introducing-managed-firewalls',
                'title'             => 'Vapor: Introducing Managed Firewalls',
                'content'           => '<p>Today, we are proud to introduce Vapor&#39;s managed firewalls for basic protection against denial-of-service attacks targeting your environment, as well as protection against pervasive bot traffic that can consume your environment&#39;s resources.</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/BZErj7M4DwyKnKNaGhGXplknJ6lnrWTo02m75ixn.png" title="metrics" /></p><p>You may start using Vapor&#39;s managed firewall by defining the&nbsp;<code>firewall</code>&nbsp;configuration option within your application&#39;s&nbsp;<code>vapor.yml</code>&nbsp;file:</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/wyWaZZBMc7X2OoNNMJj91akOyRrsEhtVJkJEhFve.png" title="code" /></p><h3><code>rate-limit</code></h3><p>When using the&nbsp;<code>rate-limit</code>&nbsp;option, Vapor&#39;s managed firewall tracks the rate of requests for each originating IP address and blocks IPs with request rates over the given&nbsp;<code>rate-limit</code>&nbsp;value. In the example above, if the request count for an IP address exceeds 1,000 requests in any 5-minute time span then the firewall will temporarily block requests from that IP address with the&nbsp;<code>403 Forbidden</code>&nbsp;HTTP status code.</p><h3><code>bot-control</code></h3><p>When using the bot-control option, Vapor&#39;s managed firewall blocks requests from pervasive bots, such as scrapers or search engines. Over a dozen categories are available for use, and their usage will depend on the type of application you have.</p><p>Be sure to check out Vapor&#39;s&nbsp;<strong><a href="https://docs.vapor.build/1.0/projects/environments.html#firewall">managed firewall documentation</a></strong>&nbsp;before you begin using this feature. Behind the scenes, Vapor&#39;s managed firewall uses&nbsp;<strong><a href="https://aws.amazon.com/waf/">Amazon WAF</a></strong>&nbsp;- feel free to check out the WAF documentation for more information about the WAF service and its pricing.</p><p>We hope you enjoy this new addition to Laravel Vapor. At Laravel, we&#39;re committed to providing you with the most robust and developer-friendly PHP experience in the world. If you haven&#39;t checked out Vapor, now is a great time to start! You can create your account today at:&nbsp;<strong><a href="https://vapor.laravel.com/">vapor.laravel.com</a></strong>.</p>',
                'preview_image'     => 'images/for8Vu64xoRmD5p5OgvM7um40Ob4P06T8Mk671um.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'vapor-redis-6x-clusters-are-now-available',
                'title'             => 'Vapor: Redis 6.x Clusters Are Now Available',
                'content'           => '<p>Vapor allows you to easily create and manage scalable Redis Cache Clusters directly from the Vapor UI or using the Vapor CLI. Starting today, in addition to Redis 5.x Clusters,&nbsp;<strong>you may now also create and manage Redis 6.x Clusters</strong>.</p><p>Redis 6.x is the latest version of open-source&nbsp;<a href="https://redis.io/">Redis</a>&nbsp;software. This new version brings improved security and boosts the performance of your cache.</p><p>You may start using Redis 6.x Clusters by creating a new cache on the Vapor UI or using the&nbsp;<code>cache</code>&nbsp;CLI command. Both ways will prompt you for more details about the cache such as the Redis version:</p><p><img alt="image" src="https://laravel-blog-assets.s3.amazonaws.com/FAIOFs5zI8Jg4aMvqwkN5NBqPy1FNT3aUg2EBssC.png" title="redis6.x" /></p><p>Please check out the&nbsp;<a href="https://aws.amazon.com/blogs/aws/new-redis-6-compatibility-for-amazon-elasticache/">AWS blog announcement</a>&nbsp;for more information about this new feature.</p><p>We hope you enjoy this new addition to Laravel Vapor. At Laravel, we&#39;re committed to providing you with the most robust and developer-friendly PHP experience in the world. If you haven&#39;t checked out Vapor, now is a great time to start! You can create your account today at:&nbsp;<strong><a href="https://vapor.laravel.com/">vapor.laravel.com</a></strong>.</p>',
                'preview_image'     => 'images/83G1CofMj2o7OAlGVUJUh3qJQPpGsLDWg8RotFdK.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ],
            [
                'slug'              => 'forge-april-round-up',
                'title'             => 'Forge: April Round-Up',
                'content'           => '<p>April has been a busy month at&nbsp;<a href="https://forge.laravel.com/" rel="noopener noreferrer">Laravel Forge</a>. With such a feature-packed month, I thought it would be great to finish the month with a blog post highlighting some of the best bits.</p><p>Firstly,&nbsp;<a href="https://twitter.com/claudiodekker" rel="noopener noreferrer">Claudio Dekker</a>&nbsp;joined us on the 5th April. Claudio will be primarily working alongside&nbsp;<a href="https://twitter.com/jbrooksuk" rel="noopener noreferrer">myself</a>&nbsp;on Forge.</p><h2>Server Events Panel</h2><p>Claudio&#39;s first contribution to Forge is the addition of a new Server Events panel. This panel displays the last 30 days of server events, such as adding an SSH key, creating a new site, installing a new version of PHP, etc. It also doubles as an server audit trail, allowing you to see who did what, and when.</p><p><img alt="The new Server Events panel in Forge." src="https://laravel-blog-assets.s3.amazonaws.com/kz3VXrvSsUptwh2nZdwEE8QnQOkSaWNXOc27Kyb9.png" /></p><p>The new Server Events panel in Forge.</p><h2>Site Commands Panel Improvements &amp; API</h2><p>We shipped the&nbsp;<a href="https://blog.laravel.com/forge-site-commands" rel="noopener noreferrer">Site Commands Panel</a>&nbsp;at the end of March, and have continued to improve it since. The latest round of improvements include:</p><ul><li>Commands which fail due to server connection issues will correctly be marked as failed.</li><li>The panel is now always available, even for sites that don&#39;t have projects installed. This is particularly useful when you&#39;re using Forge in combination with&nbsp;<a href="https://envoyer.io/" rel="noopener noreferrer">Envoyer</a>.</li><li>Commands can now be re-ran via the dropdown menu.</li></ul><p>Furthermore, we also introduced an&nbsp;<a href="https://forge.laravel.com/api-documentation#site-commands" rel="noopener noreferrer">API for Site Commands</a>. This is also available via the latest version of the&nbsp;<a href="https://github.com/laravel/forge-sdk" rel="noopener noreferrer">forge-sdk</a>&nbsp;package.</p><h2>Editing Security Rules</h2><p>Until recently, if you wanted to add additional users to an existing security rule, you&#39;d have to first delete it and manually re-add it. Now, you can simply add a new rule with the same path and new users and Forge will automatically add the users to the existing rule.</p><h2>Improved Support for Internationalized Domains</h2><p>Whilst Forge has supported internationalized domains for a while, you had to know how to provide the decoded version of the domain.</p><p>The Forge frontend will now automatically encode and decode the domain name for you at every point between adding the new site, creating the Nginx configuration, and requesting LetsEncrypt certificates.</p><p>When using the API to manage sites, you should encode and decode the domain manually.</p><h2>Change Databases Within Backups</h2><p>Database Backups have been a much-loved feature in Forge and we&#39;ve continued to develop it since releasing it last year.</p><p>When editing a backup configuration, it is now possible to change the databases that will be backed up. If the selected databases are changed, Forge will ask you to confirm that it&#39;s an intended change to prevent any accidental data loss.</p><p><img alt="Forge will ask for confirmation when changing databases in a backup configuration." src="https://laravel-blog-assets.s3.amazonaws.com/uBoGPdMNQLNwnuKAtqfZFHZAZMd6kaUrSJVu54y7.png" /></p><p>Forge will ask for confirmation when changing databases in a backup configuration.</p><h2>Hetzner Backups</h2><p>Hetzner&#39;s &quot;<a href="https://docs.hetzner.com/cloud/general/faq" rel="noopener noreferrer">Daily Backups</a>&quot; option may be enabled when creating a server to enable the provider&#39;s daily backup feature, similar to DigitalOcean&#39;s backup offering.</p><h2>Laravel Octane Support</h2><p>We&#39;ve&nbsp;<a href="https://blog.laravel.com/forge-octane-support" rel="noopener noreferrer">announced Laravel Octane support</a>&nbsp;on our blog already, but we couldn&#39;t not mention it again!</p><p>The feedback from users already testing Octane has been great, and we plan on releasing the first stable release of&nbsp;<a href="https://github.com/laravel/octane" rel="noopener noreferrer">Laravel Octane</a>&nbsp;next week.</p><h2>Environment Panel Improvements</h2><p>The Environment Panel has been updated with a few neat features:</p><ul><li>The panel now polls in the background for server-side changes and notifies you if it has changed.</li><li>The contents of the file are now only loaded when the panel is viewed.</li></ul><p><img alt="Environment file polling." src="https://laravel-blog-assets.s3.amazonaws.com/3THTEZwCnFVK8RX9YTXo1hiLZEowAzlABrMIBixv.png" /></p><p>Environment file polling.</p><h2>DigitalOcean VPC Support</h2><p>Last year DigitalOcean replaced their Private Network feature with a much better VPC offering.</p><p>A VPC (or Virtual Private Cloud) allows you to privately network your servers together so that they can communicate via a local network.</p><p>By default, DigitalOcean has already created a VPC for&nbsp;<em>some</em>&nbsp;of their available regions. Forge will now allow you to select an existing VPC or create a new one.</p><p><img alt="Selecting a DigitalOcean VPC." src="https://laravel-blog-assets.s3.amazonaws.com/CUAmitJAHPxaUrZ4XtNd24ySCOHY9wNeapun7sVO.png" /></p><p>Selecting a DigitalOcean VPC.</p><h2>Better Deployment Failure Email Notifications</h2><p>Being notified of failed deployments is critical to ensuring that your changes actually deployed.</p><p>You can now manually set who should be notified of failed deployments. Previously, only the site owner and circle members would be notified.</p><h2>LetsEncrypt (SSL) Improvements</h2><p>Finally, we&#39;ve made several stability improvements to the way LetsEncrypt certificates are issued, and have also added the ability to select a Public Key Algorithm.</p><p>While most of our customers are already using modern ECDSA-based SSL certificates on their websites, this change means that those who need an (older, but still secure) RSA-based SSL certificate, can now choose to do so.</p><p>We hope that these enhancements and features provide you with all the tools you need for easier server management.</p><p>If you don&rsquo;t have a&nbsp;<a href="https://forge.laravel.com/" rel="noopener noreferrer">Forge</a>&nbsp;account, now is a great time to sign up! Forge allows you to painlessly create and manage PHP servers which include MySQL, Redis, Memcached, database backups, and everything else you need to run robust, modern Laravel applications.</p>',
                'preview_image'     => 'images/FKBV9m4NJXpor6RhYc3jL2wULwMxx6qs31sjP0mF.png',
                'created_at'        => now(),
                'updated_at'        => now(),
                'user_id'           => 1
            ]
        ];

        $post2categories = [
            [
                'post_id'       => '1',
                'category_id'   => '5'
            ],
            [
                'post_id'       => '1',
                'category_id'   => '6'
            ],
            [
                'post_id'       => '1',
                'category_id'   => '7'
            ],
            [
                'post_id'       => '1',
                'category_id'   => '8'
            ],
            [
                'post_id'       => '2',
                'category_id'   => '7'
            ],
            [
                'post_id'       => '3',
                'category_id'   => '8'
            ],
            [
                'post_id'       => '4',
                'category_id'   => '7'
            ],
            [
                'post_id'       => '5',
                'category_id'   => '8'
            ],
            [
                'post_id'       => '6',
                'category_id'   => '7'
            ],
            [
                'post_id'       => '7',
                'category_id'   => '6'
            ],
            [
                'post_id'       => '8',
                'category_id'   => '7'
            ],
            [
                'post_id'       => '9',
                'category_id'   => '7'
            ],
            [
                'post_id'       => '10',
                'category_id'   => '8'
            ],
            [
                'post_id'       => '11',
                'category_id'   => '8'
            ],
            [
                'post_id'       => '12',
                'category_id'   => '7'
            ]
        ];

        DB::table('categories')->insert($categories);
        DB::table('users')->insert($users);
        DB::table('posts')->insert($posts);
        DB::table('post_categories')->insert($post2categories);
    }
}
