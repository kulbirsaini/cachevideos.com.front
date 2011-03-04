var current_page = 'home';
var pages = Array('home', 'pricing', 'install', 'configure', 'faqs', 'upgrade', 'upgrade-policy', 'vc-cleaner', 'vc-update', 'vc-scheduler', 'response-codes', 'changelog', 'restart', 'upgrade-policy');
var sections = { 'install' : ['install-rpm', 'install-script'], 'configure' : ["enable_videocache", "client_email", "offline_mode", "videocache_user", "cache_host", "base_dir", "max_cache_processes", "proxy", "proxy_username", "proxy_password", "hit_threshold", "max_video_size", "min_video_size", "disk_avail_threshold", "enable_videocache_cleaner", "video_lifetime", "logformat", "timeformat", "logdir", "logfile", "max_logfile_size", "max_logfile_backups", "scheduler_pidfile", "temp_dir", "rpc_host", "rpc_port", "enable_youtube_cache"], 'faqs' : [], 'changelog' : ["version_198", "version_197", "version_196", "version_195", "version_194", "version_193", "version_192", "version_191", "version_19", "version_18", "version_17", "version_16", "version_15", "version_14", "version_13", "version_12", "version_11", "version_10", "version_09", "version_08", "version_07", "version_06", "version_05", "version_04", "version_03", "version_02", "version_01"] };

function set_default_section(page) {
  if (sections[page] == undefined) { return false; }
  return skip_to_section(page, sections[page][0]);
};

function go_to_page(page) {
  if (page == '') { return false; }
  $('.pages > ul > li.page').attr('class', 'hidden page');
  $('#' + page).attr('class', 'page');
  set_default_section(page);
  current_page = page;
  return true;
};

function go_to_section(page, section) {
  if (page == '') { return false; }
  $('.pages > ul > li.page').attr('class', 'hidden page');
  $('#' + page).attr('class', 'page');
  current_page = page;
  return skip_to_section(page, section);
};

function skip_to_section(page, section) {
  if (section == '') { return false; }
  $('.' + page + '.tabs li').css({'color' : ''});
  $('.' + page + '.tabs li.' + section).css({'color' : '#000'});
  $('.' + page + '.tab-content > div').attr('class', 'hidden');
  $('#' + section).attr('class', '');
  return true;
};

function landing_page(cur_hash) {
  if (typeof(cur_hash) == 'undefined') { cur_hash = window.location.hash; }
  if (cur_hash == '' || cur_hash == '#') { cur_hash = '#home'; }
  hashes = cur_hash.substr(1).split('#');
  if (hashes.length >= 2) {
    if(sections[hashes[0]].indexOf(hashes[1]) > -1) { go_to_section(hashes[0], hashes[1]); }
    else if (pages.indexOf(hashes[0]) > -1) { go_to_page(hashes[0]); }
    else if (pages.indexOf(hashes[1]) > -1) { go_to_page(hashes[1]); }
  }
  else if (hashes.length == 1) { if (pages.indexOf(hashes[0]) > -1) { go_to_page(hashes[0]); } }
  else { go_to_page('home'); }

  // Set opacity
  $('.navi h2').css({'opacity' : 0.4});
  $('.navi h2.' + current_page).css({'opacity' : 0.8});

  // Set class
  $('.navi h2 a').attr('class', 'menu-item');
  $('.navi h2.external a').attr('class', '');
  $('.navi h2.' + current_page + ' a').attr('class', 'menu-item underline');
  return true;
};

jQuery(document).ready(function() {
  // Set opacity to 0.4
  $('.navi h2').css({'opacity' : .4});
  // Hide all content in tabbed views
  $('.tab-content > div').attr('class', 'hidden');
  // FAQs
  $('.question').attr('style', 'cursor:pointer;');
  $('div.faqs-category .faqs-category-name').attr('style', 'cursor:pointer;');
  $('div.faqs').attr('style', 'display:none;');
  $('div.answer').attr('style', 'display:none;');
  // Direct landing
  landing_page();
  // Set appropriate container width
  if (($('body').width() - $('.container').width() - $('#floating-box').width() - 20) < 0) {
    $('.container').attr('style', 'width:' + ($('body').width() - $('#floating-box').width() - 20) + 'px; float:right;');
  }
  // Floating box
  $('#floating-box').attr('style', 'left:' + ($('.container').offset().left - $('#floating-box').width() - 20) + 'px');

  // Listeners
  // Main Menu
  $('a.menu-item').bind('click', function(){
    landing_page($(this).attr('href'));
    return false;
  });
  // Slide Toggle Category
  $('div.faqs-category .faqs-category-name').bind('click', function() {
    $(this).parent().children('div.faqs').slideToggle();
    $(this).parent().children('.faqs').children('ul.list-faqs').children('li').children('div.answer').attr('style', 'display:none;');
    return false;
  });
  // Slide Toggle Question
  $('ul.list-faqs li .question').bind('click', function() {
    $(this).parent().children('div.answer').slideToggle();
    return false;
  });
  // Menu items
  $('.navi').hover(function(){
    $(this).children('h2:not(.active)').animate({'opacity' : .8}, 200);
    $('.navi h2 a').attr('class', 'menu-item');
    $('.navi h2.external a').attr('class', '');
  }, 
  function(){
    $(this).children('h2:not(.active)').animate({'opacity' : .4}, 100);
    $('.navi h2.' + current_page).animate({'opacity' : .8}, 100);
    $('.navi h2.' + current_page + ' a').attr('class', 'menu-item underline');
  });
});
