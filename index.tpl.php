<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <title>Cache Videos Using Squid | Videocache</title>
    <meta name="description" content="Videocache is a Squid URL rewriter plugin written in Python for bandwidth optimization while browsing famous video sharing portals/websites like Youtube, Metacafe etc. It helps you save bandwidth when a particular video is requested more than once from the same network/machine." />
    <link rel="stylesheet" href="<?php print base_path(). path_to_theme(); ?>/css/base.css" type="text/css" media="screen, projection" />
    <script type="text/javascript" src='<?php print base_path(). path_to_theme(); ?>/js/script.js'></script>
    <script type='text/javascript'>
      var mp_protocol = (('https:' == document.location.protocol) ? 'https://' : 'http://');
      document.write(unescape('%3Cscript src="' + mp_protocol + 'api.mixpanel.com/site_media/js/api/mixpanel.js" type="text/javascript"%3E%3C/script%3E'));
      try { var mpmetrics = new MixpanelLib('ed546988fd4ce9cb0ebbd36a56042b59'); } catch(err) { null_fn = function () {}; var mpmetrics = {  track: null_fn,  track_funnel: null_fn,  register: null_fn,  register_once: null_fn, register_funnel: null_fn }; };
    </script>
    <script type="text/javascript">
      $script(['<?php print base_path(). path_to_theme(); ?>/js/jquery.js', '<?php print base_path(). path_to_theme(); ?>/js/videocache.js'], function() { $(document).ready(function(){ jQueryMain(); }); });
    </script>

  </head>
  <body class="">
  <div class="body">
    <!-- Container -->
    <div class="container ">
      <div id="menu">
        <div class="navi top-navi"><h2 class="home"><a class="menu-item" href="#home">Home</a></h2></div>
        <div class="navi top-navi"><h2 class="pricing"><a class="menu-item" href="#pricing">Pricing</a></h2></div>
        <div class="navi top-navi"><h2 class="install"><a class="menu-item" href="#install">Install</a></h2></div>
        <div class="navi top-navi"><h2 class="configure"><a class="menu-item" href="#configure">Configure</a></h2></div>
        <div class="navi top-navi"><h2 class="faqs"><a class="menu-item" href="#faqs">FAQs</a></h2></div>
        <div class="navi top-navi"><h2 class="external"><a href="/forum">Support</a></h2></div>
        <div class="navi top-navi"><h2 class="external"><a href="/contact">Contact</a></h2></div>
        <div class="navi top-navi book"><h2 class="external"><a href="http://link.packtpub.com/UN6yov" target="_blank">My Book On Squid</a></h2></div>
        <br class="clear" />
      </div>

      <div id="header">
        <div class="logo" onclick="landing_page('#home');">
        </div>
      </div>

      <div class="main-container">
        <!-- Floating Box -->
        <div id="floating-box">
          <div id="floating-menu">
            <ul class="list-menu">
              <li class="floating-navi navi"><h2 class="vc-update"><a class="menu-item" href="#vc-update">Update Script</a></h2></li>
              <li class="floating-navi navi"><h2 class="vc-scheduler"><a class="menu-item" href="#vc-scheduler">Scheduler Script</a></h2></li>
              <li class="floating-navi navi"><h2 class="restart"><a class="menu-item" href="#restart">Restart</a></h2></li>
              <li class="floating-navi navi"><h2 class="vc-cleaner"><a class="menu-item" href="#vc-cleaner">Cleaner Script</a></h2></li>
              <li class="floating-navi navi"><h2 class="upgrade"><a class="menu-item" href="#upgrade">Upgrade</a></h2></li>
              <li class="floating-navi navi"><h2 class="changelog"><a class="menu-item" href="#changelog">Change Log</a></h2></li>
              <li class="floating-navi navi"><h2 class="upgrade-policy"><a class="menu-item" href="#upgrade-policy">Upgrade Policy</a></h2></li>
              <li class="floating-navi navi"><h2 class="external"><a href="/user">My Account</a></h2></li>
              <?php if ($is_admin) { ?><li class="floating-navi navi"><h2 class="external"><a href="/admin">Admin</a></h2></li><?php } ?>
            </ul>
          </div>
          <div class="sidebar-clear"></div>
          <div id="buynow" class="buy-sidebar">
            <p class="title colorfb">Buy Now</p>
            <div class="paypal-page">
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" onsubmit="try { mpmetrics.track('Buy Sidebar') } catch(err) {}; return true;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="98G37JTG77VLN">
                <input type="hidden" name="on0" value="No. of Servers?" /> No. of Servers?
                <select name="os0" class="clear" style="margin-bottom:8px;">
                  <option value="One Server">One Server $299.00</option>
                  <option value="Two Servers">Two Servers $499.00</option>
                </select>
                <input type="hidden" name="on1" value="Email (required)">Email (required) <input type="text" name="os1" maxlength="60">
                <input type="hidden" name="currency_code" value="USD">
                <input type="image" src="<?php print base_path(). path_to_theme(); ?>/images/buynow.gif" border="0" name="submit" alt="Pay Using PayPal">
              </form>
            </div>
          </div>
          <div class="sidebar-clear"></div>
          <div id="upgradenow" class="buy-sidebar">
            <p class="title colorfb">Renew License</p>
            <div class="paypal-page">
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" onsubmit="try { mpmetrics.track('Upgrade Sidebar') } catch(err) {}; return true;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="98WJHE5WRW5Z4">
                <input type="hidden" name="on0" value="No. of Servers?">No. of Servers?
                <select name="os0" class="clear" style="margin-bottom:8px;">
                  <option value="One Server">One Server $149.00</option>
                  <option value="Two Servers">Two Servers $249.00</option>
                </select>
                <input type="hidden" name="on1" value="Email (required)">Email (required) <input type="text" name="os1" maxlength="60"><br />
                <input type="hidden" name="currency_code" value="USD">
                <input type="image" src="<?php print base_path(). path_to_theme(); ?>/images/paynow.gif" border="0" name="submit" alt="Pay Using PayPal">
              </form>
            </div>
          </div>
          <br class="clear" />
        </div>
        <!-- //Floating Box -->

        <div class="pages">
          <ul class="page-container">
            <li id="home" class='page'>
              <div class="page-content">
                <h2>Cache Videos Using Squid + Videocache</h2>
                <p><strong>Videocache</strong> is a Squid URL rewriter plugin written in Python for <strong>bandwidth optimization</strong> while browsing famous video sharing portals/websites like <strong>Youtube</strong>, Metacafe etc. It helps you <strong>save bandwidth</strong> when a particular video is requested more than once from the same network/machine.</p>
                <p>Squid can not cache the videos served dynamically. Videocache fits into squid to help it cache the videos as well. The cached videos are stored on your proxy server's local storage or on a storage server in your network. These cached videos can be served to your clients at a very fast speed saving your upstream bandwidth.</p>

                <div class="half">
                  <h3><strong>Supported Websites</strong></h3>
                  <p>Videocache supports the caching of videos served dynamically from the following websites</p>
                  <ol>
                    <li><strong>Youtube &amp; Google</strong> Videos - Youtube.com and Video.google.com.</li>
                    <li><strong>Metacafe</strong> Videos - Metacafe.com</li>
                    <li><strong>DailyMotion</strong> Videos - Dailymotion.com</li>
                    <li><strong>Vimeo HD</strong> Videos - Vimeo.com</li>
                    <li><strong>Bing &amp; MSN</strong> Videos - Video.bing.com</li>
                    <li><strong>Blip TV</strong> Videos - Blip.tv</li>
                    <li><strong>Break</strong> Videos - Break.com</li>
                    <li><strong>Red Tube</strong> Videos - Redtube dot com</li>
                    <li><strong>X Tube</strong> Videos - Xtube dot com</li>
                    <li><strong>You P0rn</strong> Videos - Youporn dot com</li>
                    <li><strong>Tube 8</strong> Videos - Tube8 dot com</li>
                    <li><strong>Wrzuta</strong> Audio &amp; Videos - Wrzuta.pl</li>
                  </ol>
                </div>

                <div class="half last">
                  <h3><strong>Supported Operating Systems</strong></h3>
                  <p>Videocache currently works on almost every Linux/Unix based Operating System like <strong>Fedora, CentOS, Red Hat, RHEL, OpenSuSE, Mandriva, Ubuntu, Debian, Gentoo, FreeBSD, NetBSD, Slackware</strong>.</p>
                  <p>Videocache also works on <strong>Mac OSX</strong><sup>*</sup> and <strong>Microsoft Windows</strong><sup>*</sup> (with Cygwin).</p>
                  <div class="clear top-15"></div>

                  <h3><strong>Supported Video Formats</strong></h3>
                  <p>Videocache currently supports caching of following audio/video formats from the websites specified above: flv, 3gp, mp3, wmv, mp4, rm, ram, mov, avi, m4v</p>
                  <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <p class="center"><strong><sup>*</sup></strong> <strong>Mac OSX</strong> and <strong>Microsoft Windows</strong> are not officially supported.</p>
              </div>
            </li>

            <li id="pricing" class="hidden page">
              <div class="page-content">
                <h2>Videocache Commercial License Pricing</h2>
                <p>Latest version of Videocache is <strong>1.9.8</strong>. Videocache Bundle is one file containing the two packages (rpm and tar.gz) in one archive. With this package, you get free support via <a href="/forum">Support Forums</a>. We will email you the software bundle within 24 hours of the purchase.</p>
                <div class="clear top-15"></div>

                <h3><strong>Package Availability</strong></h3>
                <p><strong>Videocache</strong> is available in following two formats.</p>
                <ol>
                  <li><p><strong>RPM</strong> - Binary for rpm based distros like Red Hat, Fedora, CentOS, OpenSuSE etc.</p></li>
                  <li><p><strong>Source Archive</strong> - In case your distro doesn't support RPM, you can use the source archive (.tar.gz) and install Videocache using setup script included in the package. Intended for Ubuntu, Debian, BSD, Slackware users.</p></li>
                </ol>
                <div class="clear"></div>

                <div class="half">
                  <h3><strong>Purchase License</strong></h3>
                  <p><strong>Note:</strong> If you don't have <strong>PayPal</strong>, you can pay using <strong>moneybookers.com, Western Union</strong> or other means. Please check our <a class="menu-item" href="#faqs">FAQ on Payment</a> for alternate payment methods. <a href="/contact/">Contact Us</a> for bulk purchase.</p>
                  <div class="paypal-page">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" onsubmit="try { mpmetrics.track('Buy Download') } catch(err) {}; return true;">
                      <input type="hidden" name="cmd" value="_s-xclick">
                      <input type="hidden" name="hosted_button_id" value="98G37JTG77VLN">
                      <input type="hidden" name="on0" value="No. of Servers?" /> No. of Servers?
                      <select name="os0" class="clear" style="margin-bottom:8px;">
                        <option value="One Server">One Server $299.00</option>
                        <option value="Two Servers">Two Servers $499.00</option>
                      </select>
                      <div class="clear"></div>
                      <input type="hidden" name="on1" value="Email (required)">Email (required) <input type="text" name="os1" maxlength="60"><br />
                      <br class="clear" />
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      <input type="hidden" name="currency_code" value="USD">
                      <input type="image" src="<?php print base_path(). path_to_theme(); ?>/images/buynow.gif" border="0" name="submit" alt="Pay Using PayPal">
                    </form>
                  </div>
                </div>

                <div class="half last">
                  <h3><strong>Renew License</strong></h3>
                  <p>If your Videocache license has expired, then renew your license using the simple form below to receive upgrades in future.</p>
                  <div class="paypal-page">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" onsubmit="try { mpmetrics.track('Upgrade Download') } catch(err) {}; return true;">
                      <input type="hidden" name="cmd" value="_s-xclick">
                      <input type="hidden" name="hosted_button_id" value="98WJHE5WRW5Z4">
                      <input type="hidden" name="on0" value="No. of Servers?">No. of Servers?
                      <select name="os0" class="clear" style="margin-bottom:8px;">
                        <option value="One Server">One Server $149.00</option>
                        <option value="Two Servers">Two Servers $249.00</option>
                      </select>
                      <div class="clear"></div>
                      <input type="hidden" name="on1" value="Email (required)">Email (required) <input type="text" name="os1" maxlength="60"><br />
                      <br class="clear" />
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      <input type="hidden" name="currency_code" value="USD">
                      <input type="image" src="<?php print base_path(). path_to_theme(); ?>/images/paynow.gif" border="0" name="submit" alt="Pay Using PayPal">
                    </form>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
            </li>

            <li id="install" class="hidden page">
              <div class="page-content">
                <h2>Installing Videocache</h2>
                <p>If you have not purchased <strong>Videocache</strong> license already, please go to <a class="menu-item" href="#pricing">Pricing Page</a> to purchase a license now.</p>
                <div class="clear top-15"></div>

                <h3><strong>Required Packages</strong></h3>
                <p><strong>Videocache</strong> requires following packages to work. You should have these packages installed and properly configured on your system. In case you don't have these packages installed check the respective links as shown below.</p>
                <ol>
                  <li><a href="http://www.squid-cache.org" target="_blank" rel="nofollow">Squid</a> &gt;= 2.6</li>
                  <li><a href="http://python.org" target="_blank" rel="nofollow">Python</a> &gt;= 2.4.3</li>
                  <li><a href="http://code.google.com/p/iniparse/" target="_blank" rel="nofollow">Python-iniparse</a> (Any version)</li>
                  <li><a href="http://www.apache.org/" target="_blank" rel="nofollow">Apache (httpd) Web Server</a> (Any version)</li>
                </ol>
                <div class="clear top-15"></div>

                <ul class="install-tabs tabs install">
                  <li class="install-rpm" onclick="skip_to_section('install', 'install-rpm');">Installation Using RPM</li>
                  <li class="install-script" onclick="skip_to_section('install', 'install-script');" style="margin-left: 10px !important;">Installation Using setup Script</li>
                </ul>
                <div class="clear"></div>

                <div class="methods tab-content install">
                  <!-- Installation Using RPM -->
                  <div id="install-rpm" class="">
                    <p><span class="number_title">1.</span> Extract <em>videocache-bundle-x.x.x.tar.gz</em></p>
                    <div class='code'>
                      <p>[root@localhost ~]# tar -xvzf videocache-bundle-x.x.x.tar.gz</p>
                    </div>
                    <p><span class="number_title">2.</span> Change directory to <em>videocache-bundle-x.x.x</em></p>
                    <div class='code'>
                      <p>[root@localhost ~]# cd videocache-bundle-x.x.x</p>
                    </div>
                    <p><span class="number_title">3.</span> Login as <strong>root</strong> user and install the rpm using the following command.</p>
                    <div class='code'>
                      <p>[root@localhost ~]# rpm -ivh videocache-x.x-x-x.noarch.rpm</p>
                    </div>
                    <p><span class="number_title">4.</span> If the installation was successful, open the videocache man page (<em>man videocache</em>) or <em>Readme.txt</eM> or <em>Readme.html</em> and search for the configuration lines looking like the following under the heading <strong>Squid Configuration</strong>.</p>
                    <div class='code'>
                      <p># --BEGIN-- videocache config for squid
# LINES THAT SHOULD GO IN squid.conf
# --END-- videocache config for squid</p>
                    </div>
                    <p>Copy those lines and paste them in your Squid configuration file generally located at <em>/etc/squid/squid.conf</em>.</p>

                    <p><span class="number_title">5.</span> Now follow the instructions on <a class="menu-item" href="#configure">Configuration Page</a> to configure Videocache using the configuration file located at <em>/etc/videocache.conf</em> . Please don't overlook the critical options like <a class="menu-item" href="#configure#cache_host">cache_host</a>, <a class="menu-item" href="#configure#videocache_user">videocache_user</a>, <a class="menu-item" href="#configure#client_email">client_email</a>, <a class="menu-item" href="#configure#proxy">proxy</a> etc.</p>
                    <p><span class="number_title">6.</span> Restart your Apache(httpd) webserver using the following command.</p>
                    <div class='code'>
                      <p>[root@localhost ~]# apachectl -k restart</p>
                    </div>
                    <p><span class="number_title">7.</span> Start (or restart) videocache scheduler (<a class="menu-item" href="#vc-scheduler">vc-scheduler</a>) using the following command.</p>
                    <div class='code'>
                      <p>[root@localhost ~]# vc-scheduler -s restart</p>
                    </div>
                    <p><span class="number_title">8.</span> And finally restart Squid server as well using the following command.</p>
                    <div class='code'>
                      <p>[root@localhost ~]# /etc/init.d/squid restart</p>
                    </div>
                    <p>Now check <em>/var/log/videocache/</em> for Videocache logs and check <em>videocache.log</em> for current activity. You can also have a look at other logfiles to know the activity of other components.</p>
                  </div>


                  <!-- Installation using setup script -->
                  <div id="install-script" class="hidden">
                    <p><span class="number_title">1.</span> Extract <em>videocache-bundle-x.x.x.tar.gz</em></p>
                    <div class='code'>
                      <p>[root@localhost ~]# tar -xvzf videocache-bundle-x.x.x.tar.gz</p>
                    </div>
                    <p><span class="number_title">2.</span> Change directory to <em>videocache-bundle-x.x.x</em></p>
                    <div class='code'>
                      <p>[root@localhost ~]# cd videocache-bundle-x.x.x</p>
                    </div>
                    <p><span class="number_title">3.</span> Untar the <em>videocache-x-x-x.tar.gz</em> archive using the following command</p>
                    <div class='code'>
                      <p>[root@localhost ~]# tar -xvzf videocache-x.x-x.tar.gz</p>
                    </div>
                    <p><span class="number_title">4.</span> Find out the user who runs Squid on your system. On RedHat/CentOS/Fedora/OpenSuse/Gentoo etc., Squid is run by the user <em>squid</em>. On Debian/Ubuntu/pfSense, Squid is generally run by the user <em>proxy</em>. If squid is already running, use the following command to find out the user running Squid.</p>
                    <div class='code'>
                      <p>[root@localhost ~]# ps aux | grep squid</p>
                    </div>
                    <p><span class="number_title">5.</span> Install videocache using the <em>setup.py</em> script. Once the user who runs Squid is known, you can use the following command to install videocache.</p>
                    <div class='code'>
                      <p>[root@localhost ~]# python setup.py -u _squid_user_ install</p>
                    </div>
                    Let's say if the Squid is run by the user <em>proxy</em>, then we have to use the following command.</p>
                    <div class='code'>
                      <p>[root@localhost ~]# python setup.py -u proxy install</p>
                    </div>

                    <p>All the activities and errors of the setup script are logged standard output or standard error. Please check the messages for any errors.</p>
                    <p><span class="number_title">6.</span> If the installation was successful, open the videocache man-page (<em>man videocache</em>) or <em>INSTALL</em> or <em>Readme.txt</em> or <em>Readme.html</em> file and search for the configuration lines looking like the following under the heading <strong>Squid Configuration</strong>.</p>
                    <div class='code'>
                      <p># --BEGIN-- videocache config for squid
# LINES THAT SHOULD GO IN squid.conf
# --END-- videocache config for squid</p>
                    </div>
                    <p>Copy those lines and paste them in your Squid configuration file generally located at <em>/etc/squid/squid.conf</em>.</p>
                    <p><span class="number_title">7.</span> Now follow the instructions on <a class="menu-item" href="#configure">Configuration Page</a> to configure videocache using the configuration file <em>/etc/videocache.conf</em> . Please don't overlook the critical options like <a class="menu-item" href="#configure#cache_host">cache_host</a>, <a class="menu-item" href="#configure#videocache_user">videocache_user</a>, <a class="menu-item" href="#configure#client_email">client_email</a>, <a class="menu-item" href="#configure#proxy">proxy</a> etc.</p>
                    <p><span class="number_title">8.</span> Now restart Apache(httpd) web server using the following command.</p>
                    <div class='code'>
                      <p>[root@localhost ~]# apachectl -k restart</p>
                    </div>
                    <p><span class="number_title">9.</span> Start (or restart) videocache scheduler (<a class="menu-item" href="#vc-scheduler">vc-scheduler</a>) using the following command.</p>
                    <div class='code'>
                      <p>[root@localhost ~]# vc-scheduler -s restart</p>
                    </div>
                    <p><span class="number_title">10.</span> And finally restart your Squid server using the following command.</p>
                    <div class='code'>
                      <p>[root@localhost ~]# /etc/init.d/squid restart</p>
                    </div>
                    <p>Now check <em>/var/log/videocache/</em> for Videocache logs and check <em>videocache.log</em> for current activity. You can also have a look at other logfiles to know the activity of other components.</p>
                  </div>
                </div>
              </div>
            </li>

            <li id="configure" class="hidden page">
              <div class="page-content">
                <h2>Configuring Videocache</h2>
                <p>Configuring Videocache is very easy. The configuration file for videocache is located at <em>/etc/videocache.conf</em>. Below is a brief explanation of different options used in <em>videocache.conf</em>.</p>
                <p class="warn">If you change options in configuration file, please use the <a class="menu-item" href="#vc-update">Update Script</a> to update the videocache installation and restart Videocache as explained on <a class="menu-item" href="#restart">Restart Videocache</a> page.</p>
                <p>Click on the option name to get the details.</p>
                <div class="clear top-15"></div>

                <ul class="option-tabs tabs configure">
                  <li class="enable_videocache" onclick="skip_to_section('configure', 'enable_videocache');">enable_videocache</li>
                  <li class="client_email" onclick="skip_to_section('configure', 'client_email');">client_email</li>
                  <li class="offline_mode" onclick="skip_to_section('configure', 'offline_mode');">offline_mode</li>
                  <li class="videocache_user" onclick="skip_to_section('configure', 'videocache_user');">videocache_user</li>
                  <li class="cache_host" onclick="skip_to_section('configure', 'cache_host');">cache_host</li>
                  <li class="base_dir" onclick="skip_to_section('configure', 'base_dir');">base_dir</li>
                  <li class="max_cache_processes" onclick="skip_to_section('configure', 'max_cache_processes');">max_cache_processes</li>
                  <li class="proxy" onclick="skip_to_section('configure', 'proxy');">proxy</li>
                  <li class="proxy_username" onclick="skip_to_section('configure', 'proxy_username');">proxy_username</li>
                  <li class="proxy_password" onclick="skip_to_section('configure', 'proxy_password');">proxy_password</li>
                  <li class="hit_threshold" onclick="skip_to_section('configure', 'hit_threshold');">hit_threshold</li>
                  <li class="max_video_size" onclick="skip_to_section('configure', 'max_video_size');">max_video_size</li>
                  <li class="min_video_size" onclick="skip_to_section('configure', 'min_video_size');">min_video_size</li>
                  <li class="disk_avail_threshold" onclick="skip_to_section('configure', 'disk_avail_threshold');">disk_avail_threshold</li>
                  <li class="enable_videocache_cleaner" onclick="skip_to_section('configure', 'enable_videocache_cleaner');">enable_videocache_cleaner</li>
                  <li class="video_lifetime" onclick="skip_to_section('configure', 'video_lifetime');">video_lifetime</li>
                  <li class="logformat" onclick="skip_to_section('configure', 'logformat');">logformat</li>
                  <li class="timeformat" onclick="skip_to_section('configure', 'timeformat');">timeformat</li>
                  <li class="logdir" onclick="skip_to_section('configure', 'logdir');">logdir</li>
                  <li class="logfile" onclick="skip_to_section('configure', 'logfile');">logfile</li>
                  <li class="max_logfile_size" onclick="skip_to_section('configure', 'max_logfile_size');">max_logfile_size</li>
                  <li class="rpc_host" onclick="skip_to_section('configure', 'rpc_host');">rpc_host</li>
                  <li class="rpc_port" onclick="skip_to_section('configure', 'rpc_port');">rpc_port</li>
                  <li class="max_logfile_backups" onclick="skip_to_section('configure', 'max_logfile_backups');">max_logfile_backups</li>
                  <li class="scheduler_pidfile" onclick="skip_to_section('configure', 'scheduler_pidfile');">scheduler_pidfile</li>
                  <li class="temp_dir" onclick="skip_to_section('configure', 'temp_dir');">temp_dir</li>
                  <li class="enable_youtube_cache" onclick="skip_to_section('configure', 'enable_youtube_cache');">enable_youtube_cache</li>
                </ul>
                <div class="clear top-25"></div>

                <div class="options tab-content configure">
                  <div id="enable_videocache" class="option">
                    <p>This option controls the global behavior of videocache plugin. If it is 0, videocache will stop caching or serving anything. This option&rsquo;s value can be either 0 or 1.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>enable_videocache = 1</p>
                    </div>
                  </div>

                  <div id="client_email" class="option">
                    <p class="warn">The option <em>client_email</em> must be set appropriately otherwise videocache will not work.</p>
                    <p>Please set this option to the email address using which you purchased Videocache license.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>client_email = &lt;blank&gt;</p>
                    </div>
                  </div>

                  <div id="offline_mode" class="option">
                    <p>When offline mode is enabled, videocache will serve the videos already in cache and will skip caching the new videos. When set to 0, videocache will cache new video and when set to 1, videocache will serve the already cached videos and will not cache the new videos it encounters.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>offline_mode = 0</p>
                    </div>
                  </div>

                  <div id="videocache_user" class="option">
                    <p class="warn">The option <em>videocache_user</em> must be set appropriately otherwise videocache will not work.</p>
                    <p>Use this option to set the user which should be running videocache scheduler. This user must be same as the squid user. On RedHat/CentOS/SuSE, it's generally <em>squid</em> and on Debian/Ubuntu/BSDs, it generally <em>proxy</em>.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>videocache_user = squid</p>
                    </div>
                  </div>

                  <div id="cache_host" class="option">
                    <p class="warn">Please change <em>cache_host</em> to actual IP address or domain name of your proxy server, otherwise videocache will not work properly.</p>
                    <p>The hostname or IP address of the system on which caching is being done. This is used for serving the videos from the cache. Please don&rsquo;t use http:// or slashes (/). Just specify the domain name or IP address.</p>
                    <p><strong>Example</strong> : proxy.example.com</p>
                    <p>Additionally you can specifiy an alternative port to for HTTP. <strong>Example</strong> : 192.168.36.204:81</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>cache_host = 127.0.0.1</p>
                    </div>
                  </div>

                  <div id="base_dir" class="option">
                    <p>Base directories for caching the videos. You can specify multiple caching directories here separated by '|' symbol.</p>
                    <p><strong>Example</strong>: To keep <em>/videocache1</em> and <em>/videocache2</em> as your cache directories, set <em>base_dir</em> to</p>
                    <div class='code'>
                      <p>base_dir = /videocache/ | /videocache2</p>
                    </div>
                    <p>Please avoid special characters in directory names like whitespaces, $ etc.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>base_dir = /var/spool/videocache/</p>
                    </div>
                  </div>

                  <div id="max_cache_processes" class="option">
                    <p>The maximum number of parallel cache processes allowed. If all connections are consumed, videos will be queued for caching.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>max_cache_processes = 30</p>
                    </div>
                  </div>

                  <div id="proxy" class="option">
                    <p class="warn">Use <em>proxy</em> option only when Videocache server should go through another proxy server.</p>
                    <p>Proxy to be used for caching videos via HTTP.</p>
                    <p><strong>Example</strong> : http://proxy.example.com:3128/ or http://192.0.2.25:8080/</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>proxy = &lt;blank&gt;</p>
                    </div>
                  </div>

                  <div id="proxy_username" class="option">
                    <p>If the proxy server specified using proxy option requires authentication, please specify the username.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>proxy_username = &lt;blank&gt;</p>
                    </div>
                  </div>

                  <div id="proxy_password" class="option">
                    <p>If the proxy server specified using proxy option requires authentication, please specify the password.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>proxy_password = &lt;blank&gt;</p>
                    </div>
                  </div>

                  <div id="hit_threshold" class="option">
                    <p>No of times a video should be requested before we cache it.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>hit_threshold = 2</p>
                    </div>
                  </div>

                  <div id="max_video_size" class="option">
                    <p>The video of size more than <em>max_video_size</em> (MegaBytes) will not be cached.</p>
                    <p><strong>Example</strong> : If <em>max_video_size</em> = 50, videocache will not cache videos of size more than 50MB.  Set this to 0 to disable this check. Don't append MB.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>max_video_size = 0</p>
                    </div>
                  </div>

                  <div id="min_video_size" class="option">
                    <p>The video of size less than <em>min_video_size</em> (MegaBytes) will not be cached.</p>
                    <p><strong>Example</strong> : If <em>min_video_size</em> = 2, videocache will not cache videos of size less than 2MB.  Set this to 0 to disable this check. Don't append MB.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>min_video_size = 0</p>
                    </div>
                  </div>

                  <div id="disk_avail_threshold" class="option">
                    <p>This option sets the minimum available free space in Mega Bytes that is left in a partition containing a cache directory before videocache treats that partition as FULL.</p>
                    <p><strong>Example</strong> : If <em>disk_avail_threshold</em> = 200, videocache will stop caching videos in a cache directory if the free space available in that cache directory is less than 200 Mega Bytes.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>disk_avail_threshold = 1000</p>
                    </div>
                  </div>

                  <div id="enable_videocache_cleaner" class="option">
                    <p>Enables the videocache cleaner script which will remove videos from cache which have not been used since long. The value of this option can be 0 or 1.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>enable_videocache_cleaner = 1</p>
                    </div>
                  </div>

                  <div id="video_lifetime" class="option">
                    <p>The maximum life of a video in cache without being used. If the video was not accessed for more than <em>video_lifetime</em> days, it'll be removed from the cache. The unit of <em>video_lifetime</em> is days.</p>
                    <p><strong>Example</strong> : <em>video_lifetime</em> = 15 will remove videos which were not used since last 15 or more days.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>video_lifetime = 30</p>
                    </div>
                  </div>

                  <div id="logformat" class="option">
                    <p>Logformat allows you to get log messages in your preferred format. This <em>logformat</em>, <em>scheduler_logformat</em>, <em>cleaner_logformat</em> are applicable to main videocache log, scheduler log and cleaner log respectively. Use the format codes described below.</p>
                    <div class='code'>
                      <p>%  - A literal % character
ts - Seconds since epoch
tu - Time in millisecond
tl - Local Time
tg - GMT Time
p  - Process ID of the process logging the message
s  - Severity level of the log message
i  - Client's IP address
w  - Website ID (eg. YOUTUBE/GOOGLE/VIMEO etc.)
c  - Status Code (CACHE_HIT/CACHE_MISS etc.)
v  - Video ID of current video
m  - Additional Message (for verbose logs)
d  - Debug message (for debugging purpose)</p>
                    </div>
                    <p><strong>Example</strong> : <em>logformat</em> = %ts %i %w %c %v</p>
                    <p>Default Values:</p>
                    <div class="code">
                      <p>logformat = %tl %p %s %i %w %c %v %m %d
scheduler_logformat = %tl %p %s %i %w %c %v %m %d
cleaner_logformat = %tl %p %s %w %c %v %m %d</p>
                    </div>
                  </div>

                  <div id="timeformat" class="option">
                    <p>You can use a custom format for displaying time in log messages. Use the format codes described below</p>
                    <div class='code'>
                      <p>%a    Abbreviated weekday name (Sun, Mon, ...)
%A    Full weekday name (Sunday, Monday, ...)
%b    Abbreviated month name (Jan, Feb, Mar, ...)
%B    Full month name (January, February, ...)
%d    Day of the month as a decimal number [01..31]
%H    Hour (24-hour clock) as a decimal number [00..23]
%I    Hour (12-hour clock) as a decimal number [01..12]
%j    Day of the year as a decimal number [001..366]
%m    Month as a decimal number [01..12]
%M    Minute as a decimal number [00..59]
%p    Either AM or PM
%S    Second as a decimal number [00..59]
%y    Year without century as a decimal number [00..99]
%Y    Year with century as a decimal number</p>
                    </div>
                    <p class="warn">The format <em>timeformat</em> will be applicable to localtime and GMT time in the log messages.</p>
                    <p><strong>Example</strong> : <em>timeformat</em> = %B %b, %Y %H:%M:%S</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>timeformat = %d/%b/%Y:%H:%M:%S</p>
                    </div>
                  </div>

                  <div id="logdir" class="option">
                    <p>Directory where videocache logs will be stored.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>logdir = /var/log/videocache/</p>
                    </div>
                  </div>

                  <div id="logfile" class="option">
                    <p>The name of log file can be specified using different logfile options. Please avoid any special characters in filename.</p>
                    <p>Default Values:</p>
                    <div class='code'>
                      <p>logfile = videocache.log
scheduler_logfile = scheduler.log
cleaner_logfile = cleaner.log
tracefile = trace.log</p>
                    </div>
                  </div>

                  <div id="max_logfile_size" class="option">
                    <p>Maximum size of logfiles specified above. The size is in mega bytes. The log files will be rotated once they exceed the maximum specified size.</p>
                    <p class="warn">Please don’t use <em>max_logfile_size</em> = 10MB. Don’t append MB.</p>
                    <p>Default Values:</p>
                    <div class='code'>
                      <p>max_logfile_size = 10
max_scheduler_logfile_size = 10
max_cleaner_logfile_size = 10
max_tracefile_size = 10</p>
                    </div>
                  </div>

                  <div id="max_logfile_backups" class="option">
                    <p>The logfiles are automatically rotated once they have exceeded the <em>max_logfile_size</em>. The <em>max_logfile_backups</em> is the number of backup files you want to keep.</p>
                    <p><strong>Example</strong> : <em>max_logfile_backups</em> = 2 will keep <em>videocache.log</em> and <em>videocache.log.1</em> and <em>videocache.log.2</em> as logfiles.</p>
                    <p>Default Values:</p>
                    <div class='code'>
                      <p>max_logfile_backups = 10
max_scheduler_logfile_backups = 10
max_cleaner_logfile_backups = 5
max_tracefile_backups = 1</p>
                    </div>
                  </div>

                  <div id="scheduler_pidfile" class="option">
                    <p>The <em>scheduler_logfile</em> option can be used to specify the location of a file which will be used to track process ID of the currently running Videocache scheduler.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>scheduler_pidfile = /var/run/videocache.pid</p>
                    </div>
                  </div>

                  <div id="temp_dir" class="option">
                    <p>Directory to store partially cached videos. Directory name is relative to <em>base_dir</em>.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>temp_dir = tmp</p>
                    </div>
                  </div>

                  <div id="rpc_host" class="option">
                    <p>XMLRPC server is used for memory sharing across different instances of videocache. Leave these settings as it is if you don't have a fair idea of XMLRPC. This will be 127.0.0.1 in most cases.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>rpc_host = 127.0.0.1</p>
                    </div>
                  </div>

                  <div id="rpc_port" class="option">
                    <p>Please make sure this port is not currently in use. If it is in use by some other program, change this to some port above 1024 which is not in use by any other program.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>rpc_port = 9100</p>
                    </div>
                  </div>

                  <div id="enable_youtube_cache" class="option">
                    <p>This option enables the caching of Youtube videos. This option&rsquo;s value can be either 0 or 1.</p>
                    <p>Default value:</p>
                    <div class='code'>
                      <p>enable_youtube_cache = 1</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li id="faqs" class="hidden page">
              <div class="page-content">
                <h2>Videocache Freequently Asked Questions</h2>
                <p>We have divided our <strong>Freequently Asked Questions</strong> in several categories. Please click on a category to view its questions. And then click on a question to view its answer. The page will not reload when you open a category or answer.</p>
                <br class="clear" />
                <div class="faqs-category">
                  <h3 class="faqs-category-name">General</h3>
                  <div class="faqs">
                    <ul class="list-faqs">
                      <li>
                        <h5 class="question">What is Videocache?</h5>
                        <div class="answer">
                          <p><strong>Videocache</strong> is a Squid URL rewriter plugin written in Python for bandwidth optimization while browsing famous video sharing portals/websites like Youtube, Metacafe etc. It helps you save bandwidth when a particular video is requested more than once from the same network/machine.</p>
                          <p>Squid can not cache the videos served dynamically. Videocache fits into squid to help it cache the videos as well. The cached videos are stored on your proxy server's local storage or on a storage server in your network. These cached videos can be served to your clients at a very fast speed saving your upstream bandwidth.</p>
                          <p>For more details, check <a class="menu-item" href="#home">Home Page</a>.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">How can I get Videocache?</h5>
                        <div class="answer">
                          <p>Please check the <a class="menu-item" href="#pricing">Pricing Page</a> and select an appropriate license for yourself. Once you purchase a license, we deliver the software bundle to you via email within 24 hours of receiving the client information.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">How many sites does Videocache support?</h5>
                        <div class="answer">
                          <p>Please check <strong>Supported Websites</strong> section on <a class="menu-item" href="#home">Home Page</a> for a list of supported websites.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">What version of Squid does Videocache work with?</h5>
                        <div class="answer">
                          <p>Videocache currently works with all Squid versions later than Squid-2.6.STABLE21. That means it work with Squid 2.6.x, 2.7.x and also with 3.0.x, 3.1.x and 3.2.x.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Does Videocache work with Squid 3.x?</h5>
                        <div class="answer">
                          <p>Yes.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Does Videocache work with Squid 2.7?</h5>
                        <div class="answer">
                          <p>Yes.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Does Videocache work with Lusca Cache?</h5>
                        <div class="answer">
                          <p>Yes.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Does Videocache work on XYZ operating system?</h5>
                        <div class="answer">
                          <p>Videocache work on almost all Linux/Unix operating systems provided they have support for the packages mentioned in <strong>Required Packages</strong> section on <a class="menu-item" href="#install">Installation Page</a>.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Does Videocache work on FreeBSD/NetBSD/OtherBSD?</h5>
                        <div class="answer">
                          <p>Yes.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Does Videocache work on Debian or Ubuntu?</h5>
                        <div class="answer">
                          <p>Yes.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Does Videocache work on RedHat/CentOS/Fedora/OpenSuSE/Gentoo?</h5>
                        <div class="answer">
                          <p>Yes.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Where the cached videos are stored on my system?</h5>
                        <div class="answer">
                          <p>Normally, the cached videos are stored in <em>/var/spool/videocache/</em>. If the cached videos are not there or this directory doesn't exits, check the value of <a class="menu-item" href="#configure#base_dir">base_dir</a> option in <em>/etc/videocache.conf</em> and look for videos in the directory specified there.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Which python version is required for videocache?</h5>
                        <div class="answer">
                          <p>Python later than 2.4.3 will work.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question"></h5>
                        <div class="answer">
                          <p></p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="faqs-category">
                  <h3 class="faqs-category-name">Payment/Purchase</h3>
                  <div class="faqs">
                    <ul class="list-faqs">
                      <li>
                        <h5 class="question">What are the supported payment methods?</h5>
                        <div class="answer">
                          <p>We support the following payments methods:</p>
                          <ul class="list-square">
                            <li><a href="https://www.paypal.com/">PayPal</a> (Recommended)</li>
                            <li><a href="http://moneybookers.com/">MoneyBookers</a></li>
                            <li><a href="http://www.westernunion.com/">Western Union</a></li>
                            <li><a href="http://en.wikipedia.org/wiki/Wire_transfer">Wire Transfer/Direct Bank Transfer</a></li>
                            <li><a href="http://en.wikipedia.org/wiki/Online_banking">Internet Banking/Online Banking</a> (Supported only in selected countries)</li>
                            <li>Cheque or Demand Draft (Supported only in selected countries)</a>
                          </ul>
                          <p><strong>NOTE:</strong> Customer will have to bear any extra charges charged by various payments gateways other than PayPal and MoneyBookers.</p> 
                        </div>
                      </li>
                      <li>
                        <h5 class="question">PayPal doesn't work in my country. How can I purchase Videocache?</h5>
                        <div class="answer">
                          <p>Please check the above FAQ on supported payment methods.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Can I use a friend's PayPal account or credit card to purchase Videocache?</h5>
                        <div class="answer">
                          <p>Yes. But we encourage you to use your own account or credit card. In case you are using a friend's account or credit card, please leave a note mentioning the same.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">It's been more than 24 hours since I purchased the software but I have not received it yet. Why?</h5>
                        <div class="answer">
                          <p>First of all, we apologize if you had to face any such delays. The reason can be any of the below.</p>
                          <ul class="list-square">
                            <li>Mostly, the reason is that you have not entered the Client Information in our Cilent Information System and we were unable to process your order.</li>
                            <li>We have sent you the package and it might have been marked as spam by your mail client. Please check your spam folder.</li>
                            <li>Sometimes we are unable to process your order because of the local holidays or festivals. We owe you an apology for that. We'll try to email you the software bundle as soon as we can.</li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Why are you asking for Client Information?</h5>
                        <div class="answer">
                          <p>So that we can answer your support questions as quickly as possible if you face a problem with Videocache.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Will you put my information on Videocache website, any other third party website or anywhere on Internet?</h5>
                        <div class="answer">
                          <p>NO. We never do that. We never share your information with any third party website or anywhere on Internet. If we want to put your information on our website, we'll take your permission first. Your information will be put on our website only after your approval.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question"></h5>
                        <div class="answer">
                          <p></p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="faqs-category">
                  <h3 class="faqs-category-name">License</h3>
                  <div class="faqs">
                    <ul class="list-faqs">
                      <li>
                        <h5 class="question">What are the Videocache Commercial License terms?</h5>
                        <div class="answer">
                          <p>The license terms are very simple. Simply put,</p>
                          <ul class="list-square">
                            <li>You can not pass on the software to your friends. In case you do, your license will be terminated.</li>
                            <li>Videocache licensed for one server can only be installed one server. You can not install Videocache licensed for one server on more than one servers. But there are no limits like number of CPUs on the server.</li>
                            <li>In case you happen to format your server, you can reinstall Videocache.</li>
                            <li>You can first test your Videocache bundle on a test machine and then transfer the setup to production server. But remember only one server at a time. That means you can't keep the setup on test machine anymore.</li>
                          </ul>
                          <p><strong>NOTE:</strong> : The terms mentioned above are not the only terms forced by the Commercial License. Please check the <em>Commercial License.txt</em> included with your Videocache bundle for details.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Can I reinstall my Videocache if I format my server or my hard disk crashes?</h5>
                        <div class="answer">
                          <p>Yes. The only condition is that you should not install videocache licensed for one server on more than one servers.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Can I first test my Videocache on a test server and then install it on my production server?</h5>
                        <div class="answer">
                          <p>Yes. But once you install Videocache on production server, you'll have to remove Videocache from the test server.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Is there a discount if I purchase licenses in bulk?</h5>
                        <div class="answer">
                          <p>Yes. Please contact us using the <a href="/contact">Contact Link</a> mentioning your requirements.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">I want to redistribute Videocache in my area. Is there a program for that?</h5>
                        <div class="answer">
                          <p>Yes. We have a very attractive redistribution program. All you need to do is to find the clients in your area and we'll handle the rest. We offer technical support on the redistributed licenses. Please contact us using the <a href="/contact">Contact Link</a>.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question"></h5>
                        <div class="answer">
                          <p></p>
                        </div>
                      </li>
                      <!--li>
                        <h5 class="question">What if I don't obey the license terms?</h5>
                        <div class="answer">
                          <p>You'll not receive any free upgrades in future and your Videocache license will be terminated.</p>
                        </div>
                      </li-->
                    </ul>
                  </div>
                </div>

                <div class="faqs-category">
                  <h3 class="faqs-category-name">Installation</h3>
                  <div class="faqs">
                    <ul class="list-faqs">
                      <li>
                        <h5 class="question">How to install videocache?</h5>
                        <div class="answer">
                          <p>Videocache can be installed from available binaries or source. For details on installation methods and steps, please check the <a class="menu-item" href="#install">Installation Page</a>.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">Python-iniparse is not installed on my system. How do I install python-iniparse?</h5>
                        <div class="answer">
                          <p>For all Unix/Linux systems, download python-iniparse from <a href="http://code.google.com/p/iniparse/">iniparse website</a>. Untar the package. Go to iniparse-x.x.x directory and use this command to install it.</p>
                          <div class='code'>
                            <p>[root@localhost iniparse-x.x.x]# python setup.py install</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <h5 class="question">I don't have Apache web server. Can I use some other web server?</h5>
                        <div class="answer">
                          <p>Yes. But we officially support only Apache. You can use any web-server you want. Videocache requires your web-server to alias <em>/var/spool/videocache/</em> directory as <em>/videocache/</em> so that it can be accessed via http://your_system/videocache/. If you have a web server that supports aliasing, you can use it without any worries.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question"></h5>
                        <div class="answer">
                          <p></p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="faqs-category">
                  <h3 class="faqs-category-name">Configuration</h3>
                  <div class="faqs">
                    <ul class="list-faqs">
                      <li>
                        <h5 class="question">How to configure videocache?</h5>
                        <div class="answer">
                          <p>Configuring videocache involves setting some options to correct values in the configuration file located at <em>/etc/videocache.conf</em> for your system/environment. Check the <a class="menu-item" href="#configure">Configuration Page</a> for detailed instructions.</p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question"></h5>
                        <div class="answer">
                          <p></p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question"></h5>
                        <div class="answer">
                          <p></p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question"></h5>
                        <div class="answer">
                          <p></p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question"></h5>
                        <div class="answer">
                          <p></p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="faqs-category">
                  <h3 class="faqs-category-name"></h3>
                  <div class="faqs">
                    <ul class="list-faqs">
                      <li>
                        <h5 class="question"></h5>
                        <div class="answer">
                          <p></p>
                        </div>
                      </li>
                      <li>
                        <h5 class="question"></h5>
                        <div class="answer">
                          <p></p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <br class="clear" />
                <p>Didn't find the question you want to ask? Contact us using the <a href="/contact">Contact Link</a>.</p>

              </div>
            </li>

            <li id="upgrade" class="hidden page">
              <div class="page-content">
                <h2>Upgrading Videocache</h2>
                <p>Upgrading Videocache from one version to another is pretty easy. Just follow the easy steps below.</p>
                <div class="clear top-15"></div>

                <h4><strong>Backup Configuration File</strong></h4>
                <p>Take a backup of your current videocache configuration file normally located at <em>/etc/videocache.conf</em>. <strong>You don't need to backup cache directories as videocache doesn't recreate cache directories if they exist already</strong>.</p>
                <div class='code'>
                  <p>[root@localhost ~]# cp /etc/videocache.conf /etc/videocache.conf.back</p>
                </div>
                <div class="clear top-15"></div>

                <h4><strong>Install the New Version</strong></h4>
                <p>Now copy the latest version of Videocache to your server and follow the instruction on <a class="menu-item" href="#install">Installation Page</a> to install Videocache normally.</p>
                <div class="clear top-15"></div>

                <h4><strong>Configure Videocache</strong></h4>
                <p>Now open the backed up configuration file and the new configuration file created by videocache in an editor. Compare the options in the two files and set the options in new configuration file appropriately.</p>
                <div class="clear top-15"></div>

                <h4><strong>Run Update Script</strong></h4>
                <p>Once you are done with the configuring Videocache, you need to run Videocache Update Script as shown.</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-update</p>
                </div>
                <p>For help related to <em>vc-update</em>, please check <a class="menu-item" href="#vc-update">Update Script Page</a>.</p>
                <div class="clear top-15"></div>

                <h4><strong>Restart Videocache</strong></h4>
                <p>After running the update script, restart Videocache as explained on <a class="menu-item" href="#restart">Restart Videocache</a> page.</p>
                <p>Thats all for upgrading videocache from one version to another. Now check videocache logs in <em>/var/log/videocache</em> directory for current videocache activity.</p>
              </div>
            </li>

            <li id="vc-cleaner" class="hidden page">
              <div class="page-content">
                <h2>Videocache Cleaner Script</h2>
                <p><strong>Videocache Cleaner (<em>vc-cleaner</em>)</strong> script was first introduced in version 1.9. This script helps you to remove stale videos from the cache directories. This script uses two options <a class="menu-item" href="#configure#enable_videocache_cleaner">enable_videocache_cleaner</a> and <a class="menu-item" href="#configure#video_lifetime">video_lifetime</a> from the <em>/etc/videocache.conf</em> file. So, if the value of <em>video_lifetime</em> is 30, then all the videos which were not used since last 30 days will be purged from the cache. Please note that log messages generated by this script are logged in <em>cleaner.log</em> logfile.</p>
                <p class="info">The <em>/usr/sbin/</em> should be in $PATH otherwise the commands below will not work.</p>
                <div class="clear top-15"></div>

                <h4><strong>Usage</strong></h4>
                <p>To use this script, set the appropriate value of <em>video_lifetime</em> and then run the following command</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-cleaner</p>
                </div>
                <p>If you installed videocache with --prefix option, then you should run update script command as given below.</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-cleaner --prefix=/path/to/videocache/</p>
                </div>
                <p>For a list of available options with <em>vc-cleaner</em> command, use option -h as shown below.</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-cleaner -h</p>
                </div>
                <div class="clear top-15"></div>

                <h4><strong>Automate</strong></h4>
                <p>This script is not run automatically. To run Videocache cleaner automatically, you can use the following crontab.</p>
                <div class='code'>
                  <p>0 4 * * * /usr/sbin/vc-cleaner</p>
                </div>
              </div>
            </li>

            <li id="vc-scheduler" class="hidden page">
              <div class="page-content">
                <h2>Videocache Scheduler</h2>
                <p><strong>Videocache Scheduler (<em>vc-scheduler</em>)</strong> daemon was first introduced in version 1.9.8 in order to decouple the XMLRPC server from the base Videocache plugin. Videocache Scheduler is a daemon script which runs an XMLRPC server on port 9100 and a simple scheduler program which schedules the videos for caching periodically. Note that log messages generated by this script are logged in <em>scheduler.log</em> logfile.</p>
                <p class="info">The <em>/usr/sbin/</em> should be in $PATH otherwise the commands below will not work.</p>
                <div class="clear top-10"></div>

                <h4><strong>Usage</strong></h4>
                <p>Using this script is easy. We basically need to send one of the various available signals to this script. The signals available are as follows.</p>
                <ul class='list-square'>
                  <li><strong>start</strong> : Starts the Videocache Scheduler.</li>
                  <li><strong>stop</strong> : Stops the already running Videocache Scheduler.</li>
                  <li><strong>restart</strong> : Stops the already running Videocache Scheduler and starts it again.</li>
                  <li><strong>kill</strong> : Send a TERM (kill) signal to Videocache Scheduler. Sending this signal will kill the process immediately.</li>
                </ul>
                <p>To send one of the above singals to <em>vc-scheduler</em> script, use the following command.</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-scheduler -s signal</p>
                </div>
                <p>For example, to send a restart signal, use the following command.</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-scheduler -s restart
Videocache Scheduler stopped.
Videocache Scheduler started.
[root@localhost ~]#</p>
                </div>
                <p>Sometimes, you may get a message like shown below when you try to start <em>vc-scheduler</em>.</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-scheduler -s start
Pidfile exists and Videocache Scheduler is already running...
[root@localhost ~]#</p>
                </div>
                <p>Please note that the XMLRPC server mentioned above listens on port 9100 and hence no other application can listen on port 9100. If there is a process already listening on port 9100, then you should either stop that process or change the <a class="menu-item" href="#configure#rpc_port">rpc_port</a> option in <em>/etc/videocache.conf</em> to a port above 1024 which is free. To find out the program listening on port 9100, use the following command as root.</p>
                <div class='code'>
                  <p>[root@localhost ~]# netstat -atpn | grep 9100 | grep LISTEN
tcp  0  0  127.0.0.1:9100  0.0.0.0:*  LISTEN  8481/python</p>
                </div>
                <p>In such cases, we can send the restart signal and <em>vc-scheduler</em> will try to restart the process anyway. For a list of available options with <em>vc-scheduler</em> script, use option -h as shown below.</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-scheduler -h</p>
                </div>
              </div>
            </li>

            <li id="vc-update" class="hidden page">
              <div class="page-content">
                <h2>Videocache Update Script</h2>
                <p>The <strong>Videocache Update Script (<em>vc-update</em>)</strong> was first introduced in version 1.3. Update script helps in updating the videocache installation by creating cache and log directories and making other changes that you intend to make via the main configuration file <em>/etc/videocache.conf</em>. It also generates the new Apache configuration file for videocache to suit your new configuration. Let's learn the usage of update script with a sample scenario.</p>
                <p class="warn">You must <a class="menu-item" href="#restart">Restart Videocache</a> after running the update script.</p>
                <p class="info">The <em>/usr/sbin/</em> should be in $PATH otherwise the commands below will not work.</p>
                <div class="clear top-15"></div>

                <h4><strong>Usage</strong></h4>
                <p><strong>Scenario:</strong> You want to store the cached videos in <em>/videocache/</em> instead of <em>/var/spool/videocache/</em>.</p>
                <p><strong>Solution:</strong> Change the <a class="menu-item" href="#configure#base_dir">base_dir</a> option in <em>/etc/videocache.conf</em> file as shown below.</p>
                <div class='code'>
                  <p>base_dir = /videocache/</p>
                </div>
                <p>Then run update script script as root</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-update
Created : /videocache/
Ownership changed : /videocache/
Created : /videocache/vimeo
Ownership changed : /videocache/vimeo
Created : /videocache/youtube
Ownership changed : /videocache/youtube
Created : /videocache/metacafe
Ownership changed : /videocache/metacafe
Created : /videocache/tmp
Ownership changed : /videocache/tmp
...</p>
                </div>
                <p>If you installed videocache with --prefix option, then you should run update script command as shown below.</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-update --prefix=/path/to/videocache/</p>
                </div>
                <p>For a list of available options with <em>vc-update</em> command, use option -h as shown below.</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-update -h</p>
                </div>
              </div>
            </li>

            <li id="upgrade-policy" class="hidden page">
              <div class="page-content">
                <h2>Videocache Upgrade Policy</h2>
                <p>A Videocache Commercial License is considered for free upgrades for six months from the date of purchase.</p>
                <p><strong>Note:</strong> The fee to renew an expired license will be 50% of the current price of Videocache.</p>
                <p><strong>Example</strong>: If you purchased version 1.9.4 on July 1st, 2011. You'll get free upgrades till Dec 30th, 2011.</p>
                <p><sup>*</sup> Upgrade policy may change without any prior notification.</p>
              </div>
            </li>

            <li id="response-codes" class="hidden page">
              <div class="page-content">
              </div>
            </li>

            <li id="restart" class="hidden page">
              <div class="page-content">
                <h2>Restarting Videocache</h2>
                <p>Restarting Videocache is a multistep process and doesn't involve actual restarting of Videocache script. We need to restart the different components on which Videocache depends. Below is a step by step process to restart different components.</p>
                <p class="warn">If you made any changes to the configuration file located at <em>/etc/videcache.conf</em>, then you need to run <a class="menu-item" href="#vc-update">Update Script</a> before restarting Videocache.</p>
                <div class="clear top-15"></div>

                <h4><strong>Restart Apache(httpd) Web Server</strong></h4>
                <p>As Videocache serves the cached videos via HTTP, we first need to restart our Apache(httpd) Web Server daemon. To restart Apache web server, use the following command.</p>
                <div class='code'>
                  <p>[root@localhost ~]# apachectl -k restart</p>
                </div>
                <div class="clear top-15"></div>

                <h4><strong>Restart Videocache Scheduler</strong></h4>
                <p>Videocache Scheduler is a script which is used to maintain a queue of videos which should be cached. Videocache Scheduler script basically fires up an XMLRPC server which listens on port 9100 and maintains a collection of queued videos. To restart Videocache Scheduler, use the following command.</p>
                <p class="info">The <em>/usr/sbin/</em> should be in $PATH otherwise the command below will not work.</p>
                <div class='code'>
                  <p>[root@localhost ~]# vc-scheduler -s restart</p>
                </div>
                <p>For more details on <em>vc-scheduler</em> script, please check <a class="menu-item" href="#vc-scheduler">Videocache Scheduler</a> page.</p>
                <div class="clear top-15"></div>

                <h4><strong>Restart or Reload Squid Proxy Server</strong></h4>
                <p>Once you are done restarting Apache Web Server and Videocache Scheduler script, we finally need to reload or restart our Squid proxy server daemon. To restart Squid daemon, use the following command.</p>
                <div class='code'>
                  <p>[root@localhost ~]# /etc/init.d/squid restart</p>
                </div>
                <p>Or to reload the Squid daemon, please use the following command.</p>
                <div class='code'>
                  <p>[root@localhost ~]# /etc/init.d/squid reload</p>
                </div>
                <p>That's all for restarting Videocache. Now check videocache logs in <em>/var/log/videocache</em> directory for current videocache activity.</p>
              </div>
            </li>

            <li id="changelog" class="hidden page">
              <div class="page-content">
                <h2>Change Log</h2>
                <p>Please click on a version to see the changes for that version.</p>
                <br class="clear" />

                <ul class="version-tabs tabs changelog">
                  <li class="version_198" onclick="skip_to_section('changelog', 'version_198');">1.9.8</li>
                  <li class="version_197" onclick="skip_to_section('changelog', 'version_197');">1.9.7</li>
                  <li class="version_196" onclick="skip_to_section('changelog', 'version_196');">1.9.6</li>
                  <li class="version_195" onclick="skip_to_section('changelog', 'version_195');">1.9.5</li>
                  <li class="version_194" onclick="skip_to_section('changelog', 'version_194');">1.9.4</li>
                  <li class="version_193" onclick="skip_to_section('changelog', 'version_193');">1.9.3</li>
                  <li class="version_192" onclick="skip_to_section('changelog', 'version_192');">1.9.2</li>
                  <li class="version_191" onclick="skip_to_section('changelog', 'version_191');">1.9.1</li>
                  <li class="version_19" onclick="skip_to_section('changelog', 'version_19');">1.9</li>
                  <li class="version_18" onclick="skip_to_section('changelog', 'version_18');">1.8</li>
                  <li class="version_17" onclick="skip_to_section('changelog', 'version_17');">1.7</li>
                  <li class="version_16" onclick="skip_to_section('changelog', 'version_16');">1.6</li>
                  <li class="version_15" onclick="skip_to_section('changelog', 'version_15');">1.5</li>
                  <li class="version_14" onclick="skip_to_section('changelog', 'version_14');">1.4</li>
                  <li class="version_13" onclick="skip_to_section('changelog', 'version_13');">1.3</li>
                  <li class="version_12" onclick="skip_to_section('changelog', 'version_12');">1.2</li>
                  <li class="version_11" onclick="skip_to_section('changelog', 'version_11');">1.1</li>
                  <li class="version_10" onclick="skip_to_section('changelog', 'version_10');">1.0</li>
                  <li class="version_09" onclick="skip_to_section('changelog', 'version_09');">0.9</li>
                  <li class="version_08" onclick="skip_to_section('changelog', 'version_08');">0.8</li>
                  <li class="version_07" onclick="skip_to_section('changelog', 'version_07');">0.7</li>
                  <li class="version_06" onclick="skip_to_section('changelog', 'version_06');">0.6</li>
                  <li class="version_05" onclick="skip_to_section('changelog', 'version_05');">0.5</li>
                  <li class="version_04" onclick="skip_to_section('changelog', 'version_04');">0.4</li>
                  <li class="version_03" onclick="skip_to_section('changelog', 'version_03');">0.3</li>
                  <li class="version_02" onclick="skip_to_section('changelog', 'version_02');">0.2</li>
                  <li class="version_01" onclick="skip_to_section('changelog', 'version_01');">0.1</li>
                </ul>
                <br class="clear" />
                <br class="clear" />

                <div class='versions changelog tab-content'>
                  <div id="version_198" class="version">
                    <ul>
                      <li>This version features a major code rewrite enhancing overall performance.</li>
                      <li>Offline mode: Only serve videos from cache while not caching new videos.</li>
                      <li>A separate video scheduler running XMLRPC server minimizing the communication between videocache squid plugin and XMLRPC server.</li>
                      <li>Added support for limiting the max and min size of cached videos.</li>
                      <li>Introducing customizable log formats so that you can log messages the way you want.</li>
                      <li>Introducing tracefile to capture tracebacks for quick debugging.</li>
                      <li>Error messages are also logged to syslog in case videocache is not able to start at all.</li>
                      <li>Enhanced error codes with better log messages for easy interpretation.</li>
                      <li>Bug fixes in in Videocache cleaner script.</li>
                      <li>Fully compatible with python 2.4.3</li>
                      <li>OS independent setup and upgrade scripts with lot more options.</li>
                      <li>Enhanced documentation to help the user in fixing most issues by himself.</li>
                    </ul>
                  </div>

                  <div id="version_197" class="version">
                    <ul>
                      <li>Fixed URL timeout bug.</li>
                      <li>Youtube URL change fix.</li>
                    </ul>
                  </div>

                  <div id="version_196" class="version">
                    <ul>
                      <li>New download system for Youtube/Google videos.</li>
                      <li>squid.conf lines fixed.</li>
                      <li>break.com issue fixed.</li>
                      <li>Fixed problems with Vimeo, Tube8, Youporn, Bliptv, Break.</li>
                      <li>Dailymotion testing.</li>
                    </ul>
                  </div>

                  <div id="version_195" class="version">
                    <ul>
                      <li>Removed urlgrabber dependency.</li>
                      <li>Improved logging.</li>
                      <li>Changes to update script.</li>
                    </ul>
                  </div>

                  <div id="version_194" class="version">
                    <ul>
                      <li>Fixed redtube caching.</li>
                      <li>Using Exception instead of BaseException. BaseException is available only with python &gt;= 2.5.</li>
                      <li>DOWNLOAD_ERR fixes. Better video_id linking for Youtube.</li>
                      <li>Efficient youtube caching.</li>
                      <li>Moved license to videocache directory.</li>
                      <li>Youtube Download Error fixed.</li>
                      <li>Youtube Videos now cached only once.</li>
                    </ul>
                  </div>

                  <div id="version_193" class="version">
                    <ul>
                      <li>Docs and spec changes.</li>
                      <li>Youtube new urls working.</li>
                      <li>Manpage changes.</li>
                    </ul>
                  </div>

                  <div id="version_192" class="version">
                    <ul>
                      <li>Fixed videocache to support new url formats for videos served by Youtube, Metacafe and RedTube.</li>
                      <li>urllib2.splitquery has been moved to urllib.splitquery.</li>
                    </ul>
                  </div>

                  <div id="version_191" class="version">
                    <ul>
                      <li>Entire plugin has been restructured.</li>
                      <li>Base plugin is now totally separate from the caching process which will facilitate enhanced performance.</li>
                      <li>Disk size calculation will no more hang up the plugin.</li>
                      <li>Directory size is not calculated before every download now.</li>
                      <li>The calculated size of the cache directories is cached for next 50 downloads.</li>
                      <li>The caching mechanism is not based on time because cache size will not increase unless there is a download.</li>
                      <li>The cached directory size stays with XMLRPC server.</li>
                      <li>The size calculation is done in a forked daemon so that the normal plugin behavior is not affected.</li>
                      <li>Cache size calculator function is also made generic. Earlier it used to work for 2 level deep directories.</li>
                      <li>VideoIDPool class is revised to remove unnecessary functions.</li>
                      <li>'start' and 'begin' parameters are dropped from url while downloading for caching.</li>
                      <li>Logfiles are rotated properly now. Logfile rotation doesn't require restarting squid.</li>
                      <li>If there is only one cache directory, apache alias will be /videocache instead of /videocache/0.</li>
                      <li>Added option disk_avail_threshold to check disk full scenarios.</li>
                      <li>Now size of individual cache directories can be specified via base_dir option itself.</li>
                      <li>Removed cache_size option attached with individual website directory to speed up and cleanup things.</li>
                      <li>Fixed a bug related to <a href="http://cachevideos.com/forum/post/multiple-caches#comment-523">cache directory switching</a>.</li>
                    </ul>
                  </div>

                  <div id="version_19" class="version">
                    <ul>
                      <li>Added support for youtube videos served directly from IP Address(without using domains names).</li>
                      <li>Added support for tube8 videos for mobile platform.</li>
                      <li>Fixed <a href="http://cachevideos.com/forum/post/confused-log-files">log misbehavior bug</a>.</li>
                      <li>Added a cache cleaner script to remove unused videos automatically.</li>
                      <li>Last modified time of a video is updated whenever its a CACHE_HIT to help the removal script.</li>
                      <li>VideoCache now supports multiple caching directories separated by '|' in configuration file.</li>
                    </ul>
                  </div>

                  <div id="version_18" class="version">
                    <ul>
                      <li>Few more optimizations for XMLRPC Server. Lets see how this goes.</li>
                      <li>Cleaned up code at a large scale.</li>
                      <li>Improved assigment for website specific global variables.</li>
                      <li>Moved deamon forking from XMLRPC Server to client as it would result in less occupied sockets.</li>
                      <li>Reduced total number of queries to XMLRPC Server in order to get rid of TIME_WAIT sockets.</li>
                      <li>Major cleanup for cache_video and squid_part functions.</li>
                    </ul>
                  </div>

                  <div id="version_17" class="version">
                    <ul>
                      <li>Videos are now cached only when requested more than once. Option can be customized.</li>
                      <li>Updated to cache tube8.com, tvuol.uol.com.br, blip.tv and break.com videos (including High Quality Videos).</li>
                      <li>Merged Google and Youtube videos.</li>
                      <li>Broaden the domains of google/youtube domains for video caching.</li>
                      <li>Optimized communcation between XMLRPC client and server to minimize the sockets left in TIME_WAIT state.</li>
                      <li>Extended SimpleXMLRPCServer class to add socket options and shutdown hangle to server.</li>
                      <li>Additional exception handling at every step.</li>
                      <li>Fixed Bug : <a href="http://cachevideos.com/forum/post/cache-directory-size-limiting-checked-only-video-queued">cache directory check</a>.</li>
                      <li>Added extensive exception handling for XMLRPC Server.</li>
                    </ul>
                  </div>

                  <div id="version_16" class="version">
                    <ul>
                      <li>videocache.log is not created at installation time when using setup.py. It is wrong according to debian packaging policy to create empty files at installation time.</li>
                      <li>Extended support for Dailymotion videos served via Content Delivery Networks.</li>
                      <li>Improved logging.</li>
                      <li>In case connection breaks, incomplete videos will remain in tmp folder.</li>
                      <li>Fixed setup and update script to finally work with --home or --prefix or --install-root options.</li>
                      <li>Fixed videocache script to write videos are 0644 and not 0755.</li>
                      <li>Updated spec file to change permissions of folders only and not recursively.</li>
                      <li>Plugin renamed from youtube_cache to videocache as videocache is more expressive name and the plugin cache not just youtube but other websites as well.</li>
                      <li>Complete plugin rebase again to suite python and debian naming/packaging conventions.</li>
                      <li><p>New plugin structure:</p>
                      <div class='code'>
                        <p>/etc/videocache.conf # Global config file
/etc/httpd/conf.d/videocache.conf # Apache config file [Red Hat]
/etc/apache2/conf.d/videocache.conf # Apache config file [Debian]
/usr/share/videocache/ # Core plugin code
/usr/share/man/man8/videocache.8.gz # Man Page
/usr/sbin/update-vc # Update file
/var/spool/videocache/ # Cache directories
/var/log/videocache/ # Logging directories</p>
                      </div>
                      <li>No symbolik links as they are considered bad according to packaging guidelines.</li>
                      <li>Squid acls revised.</li>
                      <li>OptionParser added to setup and update scripts.</li>
                      <li>Now --home or --prefix or --install-root option can be used while installing and updating videocache.</li>
                      <li>setup and update scripts' code is documented properly using comments.</li>
                      <li>Another option enable_video_cache added to config file to control overall caching of all the websites.</li>
                      <li>videocache.py revised to log more sensible messages. Fixed bug which was reporting false url parser errors.</li>
                    </ul>
                  </div>

                  <div id="version_15" class="version">
                    <ul>
                      <li>Rebased the entire plugin. Everything moved out of squid directories.</li>
                      <li>The core plugin code now resides in /usr/share/youtube_cache/.</li>
                      <li>The logfiles are now in /var/log/youtube_cache/ directory.</li>
                      <li>The caching directories are now in /var/spool/video_cache/ directory.</li>
                      <li>Moved youtube_cache_sysconfig.conf to youtube_cache/youtube_cache.conf.</li>
                      <li>/etc/youtube_cache.conf will now be a symlink to /usr/share/youtube_cache/youtube_cache.conf .</li>
                      <li>logfile is not an option anymore. Instead logdir is used now.</li>
                      <li>Corrected and updated INSTALL/Readme/Manpage files.</li>
                      <li>Setup file configured to make the transition for caching directories.</li>
                      <li>Corrected spec file. Uninstalling rpm will not delete cached files.</li>
                      <li>Added critical lines missing from INSTALL/Readme/Manpage.</li>
                      <li>Manpage generation using <a href="http://txt2tags.org/">Text2Tags</a>.</li>
                      <li>Manpage will be delivered uncompressed.</li>
                    </ul>
                  </div>

                  <div id="version_14" class="version">
                    <ul>
                      <li>Added support for soapbox.msn.com video caching.</li>
                      <li>Fixed bug with download scheduler. Scheduler was not scheduling more than one video at a time.</li>
                      <li>Added CHANGELOG file.</li>
                      <li>Youtube Cache updated to cache videos from You Pr0n.</li>
                      <li>Fixed logging error with wrzuta.pl.</li>
                    </ul>
                  </div>

                  <div id="version_13" class="version">
                    <ul>
                      <li>Fixed problem with setup.py to copy update-yc to /usr/sbin/.</li>
                      <li>Fixed spec file to create /usr/sbin/.</li>
                      <li>Fixed a few problems with setup.py.</li>
                      <li>Fixed unavailable video bug with youtube cache even when video is available in cache.</li>
                      <li>Introtuced update-yc to update changes made to /etc/youtube_cache.conf.</li>
                      <li>Added 'Options +Indexes' to youtube_cache.conf for apache.</li>
                    </ul>
                  </div>

                  <div id="version_12" class="version">
                    <ul>
                      <li>Updated to cache Youtube videos served from googlevideo.com servers.</li>
                      <li>Updated to cache audio from wrzuta.pl.</li>
                      <li>Setup new website for youtube cache at http:///cachevideos.com/.</li>
                      <li>Removed md5 module dependency completely.</li>
                    </ul>
                  </div>

                  <div id="version_11" class="version">
                    <ul>
                      <li>Fixed serious mistake in squid.conf for youtube_cache.</li>
                      <li>Improved INSTALL and Readme files.</li>
                      <li>Improved video id detection for youtube and google videos.</li>
                      <li>Removed python 2.5 dependency. Now works with python 2.4.</li>
                      <li>Sanitized the reloading system while squid reloads.</li>
                      <li>Added setup file for automating youtube_cache installation.</li>
                      <li>Fixed loads of bugs generated due to forking daemons.</li>
                      <li>All external processes except downloader are now started as threads.</li>
                      <li>Processes and threads are immedietely killed whenever squid is reloaded or restarted.</li>
                      <li>No backtracing goes to cache.log now.</li>
                    </ul>
                  </div>

                  <div id="version_10" class="version">
                    <ul>
                      <li>Fixes for crashes by adding try-except statements.</li>
                      <li>A bit of performance enhancement by avoiding md5 hashes for video ids.</li>
                      <li>Implemented bandwidth management.</li>
                      <li>User can put cap on max parallel downloads of videos so that entire banwidth is not consumed in caching.</li>
                    </ul>
                  </div>

                  <div id="version_09" class="version">
                    <ul>
                      <li>Implemented caching for Vimeo.com HD videos.</li>
                      <li>Fixed INSTALL/Readme/manpage file for version 0.8.</li>
                    </ul>
                  </div>

                  <div id="version_08" class="version">
                    <ul>
                      <li>Implemented video caching for redtube and xtube.</li>
                      <li>Renovated manpage and config file.</li>
                      <li>Updated INSTALL/Readme files.</li>
                    </ul>
                  </div>

                  <div id="version_07" class="version">
                    <ul>
                      <li>Clients access the video files are logged for statistics.</li>
                      <li>Logfile size introduced to control logging.</li>
                      <li>Logrotate facility for rotating logfiles added.</li>
                      <li>Added video file size to logging for statistics.</li>
                      <li>Whenever cache is full, warning will be logged now.</li>
                      <li>Bug fix : If cache is full, the videos from cache will be served.</li>
                      <li>Previously, the plugin used to exit if the cache was full.</li>
                      <li>Google Video caching implemented. Need to update spec/INSTALL/Readme/manpage files.</li>
                    </ul>
                  </div>

                  <div id="version_06" class="version">
                    <ul>
                      <li>Implemented caching for yet another video site dailymotion.com.</li>
                    </ul>
                  </div>

                  <div id="version_05" class="version">
                    <ul>
                      <li>Updated INSTALL/Readme/Spec/manpage files.</li>
                      <li>Implemented Metacafe.com video caching.</li>
                    </ul>
                  </div>

                  <div id="version_04" class="version">
                    <ul>
                      <li>Fixed spec and sysconfig file.</li>
                      <li>Fixed bugs related to large video files. Implemened all the options related to video size.</li>
                      <li>Removed python based webserver as it was creating problems in seeking in large video files. Added httpd dependency again.</li>
                      <li>Now XMLRPC will be used for communcations among forked daemons.</li>
                      <li>Added support for proxy authentication.</li>
                      <li>A new set of configuration options.</li>
                    </ul>
                  </div>

                  <div id="version_03" class="version">
                    <ul>
                      <li>Removed apache dependency. Now python web-server is used for serving videos. Fixed few bugs.</li>
                      <li>Modified config and Readme files. Added INSTALL file.</li>
                      <li>Added Readme file again.</li>
                    </ul>
                  </div>

                  <div id="version_02" class="version">
                    <ul>
                      <li>Fixed some more bugs. Added spec file to generate rpms for fedora :)</li>
                      <li>Hierarchy rearranged.</li>
                      <li>Added config file support. Now videos are not checked for updates assuming that videos will never change.</li>
                      <li>Previously youtube_cache tried to connect to internet directly. Now it uses the proxy on which its hosted.</li>
                    </ul>
                  </div>

                  <div id="version_01" class="version">
                    <ul>
                      <li>Initial Version: youtube_cache-0.1 . Works well with squid-2.6STABLE16 and up. Redundand caching.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <hr class="space" />
          <p class="center footer">Copyright &copy; 2008-2011 <a href="http://saini.co.in/" target="_blank">Kulbir Saini</a>.</p>
          <p class="center footer">All right reserved. The logos and trademarks are the property of their respective owners.</p>
          <hr class="space" />
        </div><!-- //main-container -->

      </div>
    </div><!--end .container-->
  </div>
  </body>
</html>