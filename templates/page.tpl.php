<a href="#content" class="element-invisible element-focusable"><?php print t('Skip to content'); ?></a>
<?php if ($main_menu): ?>
<a href="#navigation" class="element-invisible element-focusable" data-target=".nav-collapse" data-toggle="collapse"><?php print t('Skip to navigation'); ?></a>
<?php endif; ?>
<!-- /#skipnav -->
<?php if ((($user->uid) && ($page['admin_shortcuts'])) || (($user->uid) && ($secondary_nav))): ?>
<div id="admin-shortcuts" class="admin-shortcuts clearfix"> <?php print render($secondary_nav); ?> <?php print render($page['admin_shortcuts']); ?> </div>
<?php endif; ?>
<!-- /#admin-shortcuts -->

<div id="utility-nav" class="visible-desktop hidden-tablet hidden-phone">
	<div class="container" style="">
		<div class="row">
			<div class="row span12">
				<div class="span8" style="margin-left: 0;">
					<div id="block-menu-menu-tools" class="clearfix block block-menu span12 block-menu-menu-tools" style="margin-left: 0;margin-top:5px;">
						<div class="content">
							<ul class="inline">
								<li class="first leaf">
									<a href="/"><i class="icon-home"></i></a>
								</li>
								<li style="list-style: none">|
								</li>
								<li class="leaf">
									<a href="http://umich.edu">University of Michigan</a>
								</li>
								<li class="leaf">
									<a href="http://email.umich.edu">Email</a>
								</li>
								<li class="leaf">
									<a href="https://mitools.dent.umich.edu">MiTools</a>
								</li>
								<li class="leaf">
									<a href="http://umich.bluejeans.com">Blue Jeans</a>
								</li>
								<li class="leaf">
                                                                        <a href="http://umich.instructure.com">Canvas</a>
                                                                </li>
								<li class="leaf">
									<a href="http://wolverineaccess.umich.edu">WolvAccess</a>
								</li>
								<li class="leaf">
									<a href="/about-school/administrative/room-scheduling">RmScheduling</a>
								</li>
								<li class="leaf">
									<a href="http://umdent.hosted.panopto.com" title="Lecture Capture">Lecture Capture</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="span2 pull-right" style=" text-align: right;">
					<ul class="utility-nav-social unstyled inline">
						<li>
							<a title="Facebook" href="http://www.facebook.com/pages/Ann-Arbor-MI/University-of-Michigan-School-of-Dentistry/47109731983?ref=ts"><span class="icon-stack"><i class="icon-check-empty icon-stack-base"></i> <i class="icon-facebook"></i></span></a>
						</li>
						<li>
							<a title="Twitter" href="https://twitter.com/UMichDentistry"><span class="icon-stack"><i class="icon-check-empty icon-stack-base"></i> <i class="icon-twitter"></i></span></a>
						</li>
						<li>
							<a title="Flickr" href="http://www.flickr.com/photos/umdent/sets/"><span class="icon-stack"><i class="icon-check-empty icon-stack-base"></i> <i class="icon-flickr"></i></span></a>
						</li>
						<li>
							<a title="YouTube" href="http://www.youtube.com/user/UMichDent"><span class="icon-stack"><i class="icon-check-empty icon-stack-base"></i> <i class="icon-youtube"></i></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>






<?php if ($logo || $site_name || $site_slogan || ($page['header']) || ($page['search_box'])): ?>
<div id="header" class="clearfix header" role="banner">
  <div class="container">
    <div class="row">
      <div class="<?php if ($page['search_box']): print 'span8'; else: print 'span12'; endif; ?>">
        <?php if ($logo): ?>
        <div id="logo" class="site-logo"> <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" role="presentation" /> </a></div>
        <?php endif; ?>
        <!-- /#logo -->
        <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
          <div id="site-name" class="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></div>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
          <div id="site-slogan" class="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php if (!($site_name || $site_slogan)): ?>
        <div id="site" class="hide">
          <div id="name"><a href="<?php print $front_page; ?>"><?php print $my_site_title; ?></a></div>
        </div>
        <?php endif; ?>
        <!-- /#name-and-slogan -->
        <?php if ($page['header']): ?>
        <div id="header-content" class="row-fluid header-content"><?php print render($page['header']); ?></div>
        <!-- /#header-content -->
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- /#header -->
<?php endif; ?>
<?php if (($main_menu) || ($page['search_box'])): ?>
<div id="main-menu" class="clearfix site-main-menu">
  <div class="container hidden-phone visible-tablet visible-desktop">
    <div class="navbar">
      <?php if ($main_menu): ?>
      <div class="navbar-inner">
        <div class="container">
          <?php endif; ?>
          <?php if ($page['search_box']): ?>
          <div id="nav-search" class="nav-search"> <?php print render($page['search_box']); ?>
              <div class="center">
                  <span class="maze-bold"> &ndash; or &ndash; </span>
                      <a class="um-directory-link" href="http://umich.edu/search">go to U&ndash;M &amp; Directory search</a>
              </div>

	 </div>
          <?php endif; ?>
          <?php if ($main_menu): ?>
          <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
          <?php if ($primary_nav || !empty($page['navigation'])): ?>
          <div class="nav-collapse collapse">
            <nav id="navigation" role="navigation">
              <?php if (($primary_nav) && empty($page['navigation'])): ?>
              <?php print render($primary_nav); ?> 
              <!-- /#primary-menu -->
              <?php endif; ?>
              <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
              <?php endif; ?>
            </nav>
          </div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if ($main_menu): ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <!-- mobile primary menu -->
	      <div class="visible-phone hidden-tablet hidden-desktop">
                <div>
                  <div class="button first trigger1" style="width:50%;"><i class="icon-align-justify"></i><br>Menu</div>
                  <div class="button trigger2" style="width:50%;"><i class="icon-search"></i><br>Search</div>
                  <div class="button trigger3" style="display:none;"><i class="icon-globe"></i><br>Mobile</div>
                  <div class="button last trigger4" style="display:none;"><i class="icon-comments"></i><br>Social</div>
                </div>
		<div class="menus-container" style="overflow:hidden;">
			<div class="mobile-dropdown-menu area1" style="overflow:hidden;">
				<div class="target1">
					<?php if (($primary_nav) && empty($page['navigation'])): ?>
              					<?php print render($primary_nav); ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="mobile-dropdown-menu area2">
				<div class="target1">
				    <div class="mobile-menu-search-block">
					<?php if ($page['search_box']): ?>
          					<div id="mobile-menu-search" class="mobile-menu-search"> 
							<?php print render($page['search_box']); ?>
		  				</div>
					<?php endif; ?>	
				    </div>
				    <div class="mobile-menu-search-block"><div class="mobile-menu-find-person"><a href="http://mcommunity.umich.edu" title="Search the U-M Directory for a person"><i class="icon-user"></i> Find a person</a></div></div>
				</div>
			</div>

			<div class="mobile-dropdown-menu area3">
				<div class="target1">
					<ul class="unstyled">
						<li>item 6</li>
						<li>item 7</li>
						<li>item 8</li>
					</ul>
				</div>
			</div>

			<div class="mobile-dropdown-menu area4">
				<div class="target1">
					<ul class="unstyled">
						<li>item 9</li>
						<li>item 10</li>
						<li>item 11</li>
					</ul>
				</div>
			</div>
		</div>
	     </div>
</div>
<!-- /#main-menu -->

<?php endif; ?>
<div id="main" class="clearfix main" role="main">
  <div class="container">
    <?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
    <?php if ($page['main_top']): ?>
    <div id="main-top" class="row-fluid main-top"> <?php print render($page['main_top']); ?> </div>
    <?php endif; ?>
    <?php if ($page['main_upper']): ?>
    <div id="main-upper" class="row-fluid main-upper"> <?php print render($page['main_upper']); ?> </div>
    <?php endif; ?>
    <div id="main-content" class="row main-content">
      <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="sidebar span3 site-sidebar-first">
        <div class="row-fluid"><?php print render($page['sidebar_first']); ?></div>
      </div>
      <!-- /#sidebar-first -->
      <?php endif; ?>
      <div id="content" class="mc-content <?php if (($page['sidebar_first']) && ($page['sidebar_second'])): print 'span6'; elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print 'span9'; else: print 'span12'; endif; ?>">
        <div id="content-wrapper" class="content-wrapper">
          <div id="content-head" class="row-fluid content-head">
            <?php if ($page['highlighted']): ?>
            <div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h2 class="title" id="page-title"> <?php print $title; ?> </h2>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
            <div class="tabs"> <?php print render($tabs); ?> </div>
            <?php endif; ?>
            <?php if ($messages): ?>
            <div id="console" class="clearfix"><?php print $messages; ?></div>
            <?php endif; ?>
            <?php if ($page['help']): ?>
            <div id="help" class="clearfix"> <?php print render($page['help']); ?> </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
          </div>
          <?php if ($page['content_top']): ?>
          <div id="content-top" class="row-fluid content-top"> <?php print render($page['content_top']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_upper']): ?>
          <div id="content-upper" class="row-fluid content-upper"> <?php print render($page['content_upper']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content']) || ($feed_icons)): ?>
          <div id="content-body" class="row-fluid content-body"> <?php print render($page['content']); ?> <?php print $feed_icons; ?> </div>
          <?php endif; ?>
          <?php if ($page['content_row2']): ?>
          <div id="content-row2" class="row-fluid content-row2"> <?php print render($page['content_row2']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col2-1']) || ($page['content_col2-2'])): ?>
          <div id="content-col2" class="row-fluid content-col2">
            <?php if ($page['content_col2-1']): ?>
            <div class="span6">
              <div id="content-col2-1" class="span12 clearfix clear-row"> <?php print render($page['content_col2-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col2-2']): ?>
            <div class="span6">
              <div id="content-col2-2" class="span12 clearfix clear-row"> <?php print render($page['content_col2-2']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_row3']): ?>
          <div id="content-row3" class="row-fluid content-row3"> <?php print render($page['content_row3']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col3-1']) || ($page['content_col3-2']) || ($page['content_col3-3'])): ?>
          <div id="content-col3" class="row-fluid content-col3">
            <?php if ($page['content_col3-1']): ?>
            <div class="span4">
              <div id="content-col3-1" class="span12 clearfix clear-row"> <?php print render($page['content_col3-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col3-2']): ?>
            <div class="span4">
              <div id="content-col3-2" class="span12 clearfix clear-row"> <?php print render($page['content_col3-2']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col3-3']): ?>
            <div class="span4">
              <div id="content-col3-3" class="span12 clearfix clear-row"> <?php print render($page['content_col3-3']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_row4']): ?>
          <div id="content-row4" class="row-fluid content-row4"> <?php print render($page['content_row4']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col4-1']) || ($page['content_col4-2']) || ($page['content_col4-3']) || ($page['content_col4-4'])): ?>
          <div id="content-col4" class="row-fluid content-col4">
            <?php if ($page['content_col4-1']): ?>
            <div class="span3">
              <div id="content-col4-1" class="span12 clearfix clear-row"> <?php print render($page['content_col4-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-2']): ?>
            <div class="span3">
              <div id="content-col4-2" class="span12 clearfix clear-row"> <?php print render($page['content_col4-2']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-3']): ?>
            <div class="span3">
              <div id="content-col4-3" class="span12 clearfix clear-row"> <?php print render($page['content_col4-3']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-4']): ?>
            <div class="span3">
              <div id="content-col4-4" class="span12 clearfix clear-row"> <?php print render($page['content_col4-4']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_lower']): ?>
          <div id="content-lower" class="row-fluid content-lower"> <?php print render($page['content_lower']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_bottom']): ?>
          <div id="content-bottom" class="row-fluid content-bottom"> <?php print render($page['content_bottom']); ?> </div>
          <?php endif; ?>
        </div>
        <!-- /#content-wrap --> 
      </div>
      <!-- /#content -->
      <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar span3 site-sidebar-second">
        <div class="row-fluid"><?php print render($page['sidebar_second']); ?></div>
      </div>
      <!-- /#sidebar-second -->
      <?php endif; ?>
    </div>
    <?php if ($page['main_lower']): ?>
    <div id="main-lower" class="row-fluid main-lower"> <?php print render($page['main_lower']); ?> </div>
    <?php endif; ?>
    <?php if ($page['main_bottom']): ?>
    <div id="main-bottom" class="row-fluid main-bottom"> <?php print render($page['main_bottom']); ?> </div>
    <?php endif; ?>
  </div>
</div>
<!-- /#main, /#main-wrapper -->
<?php if ($page['footer']): ?>
<div id="footer" class="clearfix site-footer" role="contentinfo">
  <div class="container">
    <div id="footer-content" class="row-fluid footer-content"> <?php print render($page['footer']); ?> </div>
  </div>
</div>
<!-- /#footer -->
<?php endif; ?>
