




<!DOCTYPE html>
<html class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>laravel4-sublimetext-helper/_ide_helpers.php at master · laravelbook/laravel4-sublimetext-helper · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="laravelbook/laravel4-sublimetext-helper" name="twitter:title" /><meta content="laravel4-sublimetext-helper - Laravel 4 IDE Helper for Sublime Text 2" name="twitter:description" /><meta content="https://avatars3.githubusercontent.com/u/3158677?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars3.githubusercontent.com/u/3158677?s=400" property="og:image" /><meta content="laravelbook/laravel4-sublimetext-helper" property="og:title" /><meta content="https://github.com/laravelbook/laravel4-sublimetext-helper" property="og:url" /><meta content="laravel4-sublimetext-helper - Laravel 4 IDE Helper for Sublime Text 2" property="og:description" />

    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="5CF40014:2B8A:45409:53455A80" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://github.global.ssl.fastly.net/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="qEaoVoyxGWvfKoNoipUSih11fhuQO8AJV3Xj3pG8inQ=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-dfc6417658d5b6b7dd3d1e58c09c2c25dee7506e.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-fb58613beacb4fd69c4b55e2cb6da265c1813279.css" media="all" rel="stylesheet" type="text/css" />
    


        <script crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/frameworks-7e0191e2d20935894e9ce3174fda757e57d613a3.js" type="text/javascript"></script>
        <script async="async" crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/github-2986974388b9022b414d0c990c831317b6870310.js" type="text/javascript"></script>
        
        
      <meta http-equiv="x-pjax-version" content="552e17380ab19336f14de7cd374f0b42">

        <link data-pjax-transient rel='permalink' href='/laravelbook/laravel4-sublimetext-helper/blob/eaf18e9e7cd3cd6d24279ef23635d21970b7b8ec/_ide_helpers.php'>

  <meta name="description" content="laravel4-sublimetext-helper - Laravel 4 IDE Helper for Sublime Text 2" />

  <meta content="3158677" name="octolytics-dimension-user_id" /><meta content="laravelbook" name="octolytics-dimension-user_login" /><meta content="7627524" name="octolytics-dimension-repository_id" /><meta content="laravelbook/laravel4-sublimetext-helper" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="7627524" name="octolytics-dimension-repository_network_root_id" /><meta content="laravelbook/laravel4-sublimetext-helper" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/laravelbook/laravel4-sublimetext-helper/commits/master.atom" rel="alternate" title="Recent Commits to laravel4-sublimetext-helper:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production macintosh vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Flaravelbook%2Flaravel4-sublimetext-helper%2Fblob%2Fmaster%2F_ide_helpers.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="laravelbook/laravel4-sublimetext-helper"
      data-branch="master"
      data-sha="e6e0151360dc0e40da8853a5c7114a979e7d5101"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="laravelbook/laravel4-sublimetext-helper" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2Flaravelbook%2Flaravel4-sublimetext-helper"
    class="minibutton with-count js-toggler-target star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/laravelbook/laravel4-sublimetext-helper/stargazers">
      82
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Flaravelbook%2Flaravel4-sublimetext-helper"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/laravelbook/laravel4-sublimetext-helper/network" class="social-count">
        32
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/laravelbook" class="url fn" itemprop="url" rel="author"><span itemprop="title">laravelbook</span></a></span><span class="path-divider">/</span><strong><a href="/laravelbook/laravel4-sublimetext-helper" class="js-current-repository js-repo-home-link">laravel4-sublimetext-helper</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/laravelbook/laravel4-sublimetext-helper" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /laravelbook/laravel4-sublimetext-helper">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/laravelbook/laravel4-sublimetext-helper/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /laravelbook/laravel4-sublimetext-helper/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>1</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/laravelbook/laravel4-sublimetext-helper/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /laravelbook/laravel4-sublimetext-helper/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/laravelbook/laravel4-sublimetext-helper/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /laravelbook/laravel4-sublimetext-helper/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/laravelbook/laravel4-sublimetext-helper/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /laravelbook/laravel4-sublimetext-helper/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/laravelbook/laravel4-sublimetext-helper/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /laravelbook/laravel4-sublimetext-helper/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/laravelbook/laravel4-sublimetext-helper.git" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/laravelbook/laravel4-sublimetext-helper.git" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/laravelbook/laravel4-sublimetext-helper" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/laravelbook/laravel4-sublimetext-helper" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>

  <a href="http://mac.github.com" data-url="github-mac://openRepo/https://github.com/laravelbook/laravel4-sublimetext-helper" class="minibutton sidebar-button js-conduit-rewrite-url" title="Save laravelbook/laravel4-sublimetext-helper to your computer and use it in GitHub Desktop." aria-label="Save laravelbook/laravel4-sublimetext-helper to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>


                <a href="/laravelbook/laravel4-sublimetext-helper/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download laravelbook/laravel4-sublimetext-helper as a zip file"
                   title="Download laravelbook/laravel4-sublimetext-helper as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:151b572e16d11702fd5fd21fe1f82547 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/laravelbook/laravel4-sublimetext-helper/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/laravelbook/laravel4-sublimetext-helper/blob/master/_ide_helpers.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/laravelbook/laravel4-sublimetext-helper" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">laravel4-sublimetext-helper</span></a></span></span><span class="separator"> / </span><strong class="final-path">_ide_helpers.php</strong> <span aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="_ide_helpers.php" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit file-history-tease">
    <img alt="Alex Russell" class="main-avatar js-avatar" data-user="412784" height="24" src="https://avatars3.githubusercontent.com/u/412784?s=140" width="24" />
    <span class="author"><a href="/alexrussell" rel="author">alexrussell</a></span>
    <time class="js-relative-date" data-title-format="YYYY-MM-DD HH:mm:ss" datetime="2013-03-21T18:29:03Z" title="2013-03-21 19:29:03">March 21, 2013</time>
    <div class="commit-title">
        <a href="/laravelbook/laravel4-sublimetext-helper/commit/1636701e8a0c4e7da065a520d493ec7922ebcd13" class="message" data-pjax="true" title="Use `__halt_compiler()` to stop PHP processing

Rather than die, call [__halt_compiler](http://php.net/manual/en/function.halt-compiler.php) to stop PHP processing the file. This way, if the file is accidentally accessed, there won&#39;t be a bunch of errors about classes existing, etc.">Use `__halt_compiler()` to stop PHP processing</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>3</strong>  contributors</a></p>
          <a class="avatar tooltipped tooltipped-s" aria-label="masroore" href="/laravelbook/laravel4-sublimetext-helper/commits/master/_ide_helpers.php?author=masroore"><img alt="Masroor Ehsan Choudhury" class=" js-avatar" data-user="200963" height="20" src="https://avatars0.githubusercontent.com/u/200963?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="laravelbook" href="/laravelbook/laravel4-sublimetext-helper/commits/master/_ide_helpers.php?author=laravelbook"><img alt="Max Ehsan" class=" js-avatar" data-user="3158677" height="20" src="https://avatars0.githubusercontent.com/u/3158677?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="alexrussell" href="/laravelbook/laravel4-sublimetext-helper/commits/master/_ide_helpers.php?author=alexrussell"><img alt="Alex Russell" class=" js-avatar" data-user="412784" height="20" src="https://avatars3.githubusercontent.com/u/412784?s=140" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Masroor Ehsan Choudhury" class=" js-avatar" data-user="200963" height="24" src="https://avatars0.githubusercontent.com/u/200963?s=140" width="24" />
            <a href="/masroore">masroore</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Max Ehsan" class=" js-avatar" data-user="3158677" height="24" src="https://avatars0.githubusercontent.com/u/3158677?s=140" width="24" />
            <a href="/laravelbook">laravelbook</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Alex Russell" class=" js-avatar" data-user="412784" height="24" src="https://avatars3.githubusercontent.com/u/412784?s=140" width="24" />
            <a href="/alexrussell">alexrussell</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>529 lines (501 sloc)</span>
          <span class="meta-divider"></span>
        <span>41.804 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped tooltipped-w js-conduit-openfile-check"
               href="http://mac.github.com"
               data-url="github-mac://openRepo/https://github.com/laravelbook/laravel4-sublimetext-helper?branch=master&amp;filepath=_ide_helpers.php"
               aria-label="Open this file in GitHub for Mac"
               data-failed-title="Your version of GitHub for Mac is too old to open this file. Try checking for updates.">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
              <a class="minibutton disabled tooltipped tooltipped-w" href="#"
                 aria-label="You must be signed in to make or propose changes">Edit</a>
          <a href="/laravelbook/laravel4-sublimetext-helper/raw/master/_ide_helpers.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/laravelbook/laravel4-sublimetext-helper/blame/master/_ide_helpers.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/laravelbook/laravel4-sublimetext-helper/commits/master/_ide_helpers.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span> <span class="nb">__halt_compiler</span><span class="p">();</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * ---------------- DO NOT UPLOAD THIS FILE TO LIVE SERVER ------------------------</span></div><div class='line' id='LC4'><span class="sd"> * Laravel IDE Helper &lt;http://LaravelBook.com&gt;</span></div><div class='line' id='LC5'><span class="sd"> * Implements code completion for Laravel 4 in JetBrains PhpStorm and SublimeText 2</span></div><div class='line' id='LC6'><span class="sd"> * --------------------------------------------------------------------------------</span></div><div class='line' id='LC7'><span class="sd"> */</span></div><div class='line' id='LC8'>&nbsp;</div><div class='line' id='LC9'><span class="sd">/**</span></div><div class='line' id='LC10'><span class="sd"> * @method	static	bool	check()	Determine if the current user is authenticated.</span></div><div class='line' id='LC11'><span class="sd"> * @method	static	bool	guest()	Determine if the current user is a guest.</span></div><div class='line' id='LC12'><span class="sd"> * @method	static	void	user()	Get the currently authenticated user.</span></div><div class='line' id='LC13'><span class="sd"> * @method	static	bool	attempt(array  $credentials, bool   $remember)	Attempt to authenticate a user using the given credentials.</span></div><div class='line' id='LC14'><span class="sd"> * @method	static	void	login(Illuminate\Auth\UserInterface  $user, bool  $remember)	Log a user into the application.</span></div><div class='line' id='LC15'><span class="sd"> * @method	static	void	logout()	Log the user out of the application.</span></div><div class='line' id='LC16'><span class="sd"> * @method	static	void	getCookieJar()	Get the cookie creator instance used by the guard.</span></div><div class='line' id='LC17'><span class="sd"> * @method	static	void	setCookieJar(Illuminate\CookieJar  $cookie)	Set the cookie creator instance used by the guard.</span></div><div class='line' id='LC18'><span class="sd"> * @method	static	void	getDispatcher()	Get the event dispatcher instance.</span></div><div class='line' id='LC19'><span class="sd"> * @method	static	void	setDispatcher(Illuminate\Events\Dispatcher)	Set the event dispatcher instance.</span></div><div class='line' id='LC20'><span class="sd"> * @method	static	void	getSession()	Get the session store used by the guard.</span></div><div class='line' id='LC21'><span class="sd"> * @method	static	array	getQueuedCookies()	Get the cookies queued by the guard.</span></div><div class='line' id='LC22'><span class="sd"> * @method	static	void	getProvider()	Get the user provider used by the guard.</span></div><div class='line' id='LC23'><span class="sd"> * @method	static	void	getUser()	Return the currently cached user of the application.</span></div><div class='line' id='LC24'><span class="sd"> * @method	static	void	setUser(Illuminate\Auth\UserInterface  $user)	Set the current user of the application.</span></div><div class='line' id='LC25'><span class="sd"> * @method	static	string	getName()	Get a unique identifier for the auth session value.</span></div><div class='line' id='LC26'><span class="sd"> * @method	static	string	getRecallerName()	Get the name of the cookie used to store the &quot;recaller&quot;.</span></div><div class='line' id='LC27'><span class="sd"> */</span></div><div class='line' id='LC28'><span class="k">class</span> <span class="nc">Auth</span> <span class="k">extends</span> <span class="nx">Illuminate\Auth\Guard</span> <span class="p">{}</span></div><div class='line' id='LC29'><br/></div><div class='line' id='LC30'><span class="sd">/**</span></div><div class='line' id='LC31'><span class="sd"> * @method	static	bool	has(string  $key)	Determine if an item exists in the cache.</span></div><div class='line' id='LC32'><span class="sd"> * @method	static	mixed	get(string  $key, mixed   $default)	Retrieve an item from the cache by key.</span></div><div class='line' id='LC33'><span class="sd"> * @method	static	void	put(string  $key, mixed   $value, int     $minutes)	Store an item in the cache.</span></div><div class='line' id='LC34'><span class="sd"> * @method	static	void	forever(string  $key, mixed   $value)	Store an item in the cache indefinitely.</span></div><div class='line' id='LC35'><span class="sd"> * @method	static	void	remember(string   $key, int      $minutes, Closure  $callback)	Get an item from the cache, or store the default value.</span></div><div class='line' id='LC36'><span class="sd"> * @method	static	void	rememberForever(string   $key, Closure  $callback)	Get an item from the cache, or store the default value forever.</span></div><div class='line' id='LC37'><span class="sd"> * @method	static	void	forget(string  $key)	Remove an item from the cache.</span></div><div class='line' id='LC38'><span class="sd"> * @method	static	void	flush()	Remove all items from the cache.</span></div><div class='line' id='LC39'><span class="sd"> * @method	static	int	getDefaultCacheTime()	Get the default cache time.</span></div><div class='line' id='LC40'><span class="sd"> * @method	static	void	setDefaultCacheTime(int   $minutes)	Set the default cache time in minutes.</span></div><div class='line' id='LC41'><span class="sd"> * @method	static	bool	existsInMemory(string  $key)	Determine if an item is in memory.</span></div><div class='line' id='LC42'><span class="sd"> * @method	static	array	getMemory()	Get all of the values in memory.</span></div><div class='line' id='LC43'><span class="sd"> * @method	static	mixed	getFromMemory(string  $key)	Get the value of an item in memory.</span></div><div class='line' id='LC44'><span class="sd"> * @method	static	void	setInMemory(string  $key, mixed   $value)	Set the value of an item in memory.</span></div><div class='line' id='LC45'><span class="sd"> * @method	static	bool	offsetExists(string  $key)	Determine if a cached value exists.</span></div><div class='line' id='LC46'><span class="sd"> * @method	static	mixed	offsetGet(string  $key)	Retrieve an item from the cache by key.</span></div><div class='line' id='LC47'><span class="sd"> * @method	static	void	offsetSet(string  $key, mixed   $value)	Store an item in the cache for the default time.</span></div><div class='line' id='LC48'><span class="sd"> * @method	static	void	offsetUnset(string  $key)	Remove an item from the cache.</span></div><div class='line' id='LC49'><span class="sd"> */</span></div><div class='line' id='LC50'><span class="k">class</span> <span class="nc">Cache</span> <span class="k">extends</span> <span class="nx">Illuminate\Cache\Store</span> <span class="p">{}</span></div><div class='line' id='LC51'><br/></div><div class='line' id='LC52'><span class="sd">/**</span></div><div class='line' id='LC53'><span class="sd"> * @method	static	bool	has(string  $key)	Determine if the given configuration value exists.</span></div><div class='line' id='LC54'><span class="sd"> * @method	static	mixed	get(string  $key, mixed   $default)	Get the specified configuration value.</span></div><div class='line' id='LC55'><span class="sd"> * @method	static	void	set(string  $key, mixed   $value)	Set a given configuration value.</span></div><div class='line' id='LC56'><span class="sd"> * @method	static	void	getEnvironment(string  $package, string  $hint, string  $namespace)	Register a package for cascading configuration.</span></div><div class='line' id='LC57'><span class="sd"> * @method	static	void	afterLoading(string   $namespace, Closure  $callback)	Register an after load callback for a given namespace.</span></div><div class='line' id='LC58'><span class="sd"> * @method	static	void	addNamespace(string  $namespace, string  $hint)	Add a new namespace to the loader.</span></div><div class='line' id='LC59'><span class="sd"> * @method	static	void	getLoader()	Get the loader implementation.</span></div><div class='line' id='LC60'><span class="sd"> * @method	static	string	getEnvironment()	Get the current configuration environment.</span></div><div class='line' id='LC61'><span class="sd"> * @method	static	array	getAfterLoadCallbacks()	Get the after load callback array.</span></div><div class='line' id='LC62'><span class="sd"> * @method	static	array	getItems()	Get all of the configuration items.</span></div><div class='line' id='LC63'><span class="sd"> * @method	static	bool	offsetExists(string  $key)	Determine if the given configuration option exists.</span></div><div class='line' id='LC64'><span class="sd"> * @method	static	bool	offsetGet(string  $key)	Get a configuration option.</span></div><div class='line' id='LC65'><span class="sd"> * @method	static	bool	offsetSet(string  $key)	Set a configuration option.</span></div><div class='line' id='LC66'><span class="sd"> * @method	static	bool	offsetUnset(string  $key)	Unset a configuration option.</span></div><div class='line' id='LC67'><span class="sd"> */</span></div><div class='line' id='LC68'><span class="k">class</span> <span class="nc">Config</span> <span class="k">extends</span> <span class="nx">Illuminate\Config\Repository</span> <span class="p">{}</span></div><div class='line' id='LC69'><br/></div><div class='line' id='LC70'><span class="sd">/**</span></div><div class='line' id='LC71'><span class="sd"> * @method	static	bool	has(string  $key)	Determine if a cookie exists and is not null.</span></div><div class='line' id='LC72'><span class="sd"> * @method	static	mixed	get(string  $key, mixed   $default)	Get the value of the given cookie.</span></div><div class='line' id='LC73'><span class="sd"> * @method	static	void	make(string  $name, string  $value, int     $minutes)	Create a new cookie instance.</span></div><div class='line' id='LC74'><span class="sd"> * @method	static	void	forever(string  $name, string  $value)	Create a cookie that lasts &quot;forever&quot; (five years).</span></div><div class='line' id='LC75'><span class="sd"> * @method	static	void	forget(string  $name)	Expire the given cookie.</span></div><div class='line' id='LC76'><span class="sd"> * @method	static	void	getRequest()	Get the request instance.</span></div><div class='line' id='LC77'><span class="sd"> * @method	static	void	getEncrypter()	Get the encrypter instance.</span></div><div class='line' id='LC78'><span class="sd"> */</span></div><div class='line' id='LC79'><span class="k">class</span> <span class="nc">Cookie</span> <span class="k">extends</span> <span class="nx">Illuminate\Cookie\CookieJar</span> <span class="p">{}</span></div><div class='line' id='LC80'><br/></div><div class='line' id='LC81'><span class="sd">/**</span></div><div class='line' id='LC82'><span class="sd"> * @method	static	void	useDefaultQueryGrammar()	Set the query grammar to the default implementation.</span></div><div class='line' id='LC83'><span class="sd"> * @method	static	void	useDefaultSchemaGrammar()	Set the schema grammar to the default implementation.</span></div><div class='line' id='LC84'><span class="sd"> * @method	static	void	useDefaultPostProcessor()	Set the query post processor to the default implementation.</span></div><div class='line' id='LC85'><span class="sd"> * @method	static	void	getSchemaBuilder()	Get a schema builder instance for the connection.</span></div><div class='line' id='LC86'><span class="sd"> * @method	static	void	table(string  $table)	Begin a fluent query against a database table.</span></div><div class='line' id='LC87'><span class="sd"> * @method	static	void	raw(mixed  $value)	Get a new raw query expression.</span></div><div class='line' id='LC88'><span class="sd"> * @method	static	mixed	selectOne(string  $query, array   $bindings)	Run a select statement and return a single result.</span></div><div class='line' id='LC89'><span class="sd"> * @method	static	array	pretending(string  $query, array   $bindings)	Run a select statement against the database.</span></div><div class='line' id='LC90'><span class="sd"> * @method	static	bool	insert(string  $query, array   $bindings)	Run an insert statement against the database.</span></div><div class='line' id='LC91'><span class="sd"> * @method	static	int	update(string  $query, array   $bindings)	Run an update statement against the database.</span></div><div class='line' id='LC92'><span class="sd"> * @method	static	int	delete(string  $query, array   $bindings)	Run a delete statement against the database.</span></div><div class='line' id='LC93'><span class="sd"> * @method	static	bool	pretending(string  $query, array   $bindings)	Execute an SQL statement and return the boolean result.</span></div><div class='line' id='LC94'><span class="sd"> * @method	static	int	pretending(string  $query, array   $bindings)	Run an SQL statement and get the number of rows affected.</span></div><div class='line' id='LC95'><span class="sd"> * @method	static	array	prepareBindings(array  $bindings)	Prepare the query bindings for execution.</span></div><div class='line' id='LC96'><span class="sd"> * @method	static	mixed	transaction(Closure  $callback)	Execute a Closure within a transaction.</span></div><div class='line' id='LC97'><span class="sd"> * @method	static	array	pretend(Closure  $callback)	Execute the given callback in &quot;dry run&quot; mode.</span></div><div class='line' id='LC98'><span class="sd"> * @method	static	void	logQuery(string  $query, array   $bindings)	Log a query in the connection&#39;s query log.</span></div><div class='line' id='LC99'><span class="sd"> * @method	static	PDO	getPdo()	Get the currently used PDO connection.</span></div><div class='line' id='LC100'><span class="sd"> * @method	static	string	getDriverName()	Get the PDO driver name.</span></div><div class='line' id='LC101'><span class="sd"> * @method	static	void	getQueryGrammar()	Get the query grammar used by the connection.</span></div><div class='line' id='LC102'><span class="sd"> * @method	static	void	setQueryGrammar(Illuminate\Database\Query\Grammars\Grammar)	Set the query grammar used by the connection.</span></div><div class='line' id='LC103'><span class="sd"> * @method	static	void	getSchemaGrammar()	Get the schema grammar used by the connection.</span></div><div class='line' id='LC104'><span class="sd"> * @method	static	void	setSchemaGrammar(Illuminate\Database\Schema\Grammars\Grammar)	Set the schema grammar used by the connection.</span></div><div class='line' id='LC105'><span class="sd"> * @method	static	void	getPostProcessor()	Get the query post processor used by the connection.</span></div><div class='line' id='LC106'><span class="sd"> * @method	static	void	setPostProcessor(Illuminate\Database\Query\Processors\Processor)	Set the query post processor used by the connection.</span></div><div class='line' id='LC107'><span class="sd"> * @method	static	void	getEventDispatcher()	Get the event dispatcher used by the connection.</span></div><div class='line' id='LC108'><span class="sd"> * @method	static	void	setEventDispatcher(Illuminate\Events\Dispatcher)	Set the event dispatcher instance on the connection.</span></div><div class='line' id='LC109'><span class="sd"> * @method	static	void	getPaginator()	Get the paginator environment instance.</span></div><div class='line' id='LC110'><span class="sd"> * @method	static	void	setPaginator(Illuminate\Pagination\Environment|Closure  $paginator)	Set the pagination environment instance.</span></div><div class='line' id='LC111'><span class="sd"> * @method	static	bool	pretending()	Determine if the connection in a &quot;dry run&quot;.</span></div><div class='line' id='LC112'><span class="sd"> * @method	static	int	getFetchMode()	Get the default fetch mode for the connection.</span></div><div class='line' id='LC113'><span class="sd"> * @method	static	int	setFetchMode(int  $fetchMode)	Set the default fetch mode for the connection.</span></div><div class='line' id='LC114'><span class="sd"> * @method	static	array	getQueryLog()	Get the connection query log.</span></div><div class='line' id='LC115'><span class="sd"> * @method	static	string	getDatabaseName()	Get the name of the connected database.</span></div><div class='line' id='LC116'><span class="sd"> * @method	static	string	setDatabaseName(string  $database)	Set the name of the connected database.</span></div><div class='line' id='LC117'><span class="sd"> * @method	static	string	getTablePrefix()	Get the table prefix for the connection.</span></div><div class='line' id='LC118'><span class="sd"> * @method	static	void	withTablePrefix(Illuminate\Database\Grammar  $grammar)	Set the table prefix and return the grammar.</span></div><div class='line' id='LC119'><span class="sd"> */</span></div><div class='line' id='LC120'><span class="k">class</span> <span class="nc">DB</span> <span class="k">extends</span> <span class="nx">Illuminate\Database\Connection</span> <span class="p">{}</span></div><div class='line' id='LC121'><br/></div><div class='line' id='LC122'><span class="sd">/**</span></div><div class='line' id='LC123'><span class="sd"> * @var	static	void	incrementing	Indicates if the IDs are auto-incrementing.</span></div><div class='line' id='LC124'><span class="sd"> * @var	static	void	timestamps	Indicates if the model should be timestamped.</span></div><div class='line' id='LC125'><span class="sd"> * @var	static	void	exists	Indicates if the model exists.</span></div><div class='line' id='LC126'><span class="sd"> * @method	static	void	fill(array  $attributes)	Fill the model with an array of attributes.</span></div><div class='line' id='LC127'><span class="sd"> * @method	static	void	newInstance(array  $attributes, bool   $exists)	Create a new instance of the given model.</span></div><div class='line' id='LC128'><span class="sd"> * @method	static	void	newExisting(array  $attributes)	Create a new model instance that is existing.</span></div><div class='line' id='LC129'><span class="sd"> * @method	static	void	create(array  $attributes)	Save a new model and return the instance.</span></div><div class='line' id='LC130'><span class="sd"> * @method	static	void	on(string  $connection)	Begin querying the model on a given connection.</span></div><div class='line' id='LC131'><span class="sd"> * @method	static	void	all(array  $columns)	Get all of the models from the database.</span></div><div class='line' id='LC132'><span class="sd"> * @method	static	void	find(mixed  $id, array  $columns)	Find a model by its primary key.</span></div><div class='line' id='LC133'><span class="sd"> * @method	static	void	with(array  $relations)	Being querying a model with eager loading.</span></div><div class='line' id='LC134'><span class="sd"> * @method	static	void	hasOne(string  $related, string  $foreignKey)	Define a one-to-one relationship.</span></div><div class='line' id='LC135'><span class="sd"> * @method	static	void	morphOne(string  $related, string  $name, string  $foreignKey)	Define a polymorphic one-to-one relationship.</span></div><div class='line' id='LC136'><span class="sd"> * @method	static	void	belongsTo(string  $related, string  $foreignKey)	Define an inverse one-to-one or many relationship.</span></div><div class='line' id='LC137'><span class="sd"> * @method	static	void	morphTo(string  $name)	Define an polymorphic, inverse one-to-one or many relationship.</span></div><div class='line' id='LC138'><span class="sd"> * @method	static	void	hasMany(string  $related, string  $foreignKey)	Define a one-to-many relationship.</span></div><div class='line' id='LC139'><span class="sd"> * @method	static	void	morphMany(string  $related, string  $name, string  $foreignKey)	Define a polymorphic one-to-many relationship.</span></div><div class='line' id='LC140'><span class="sd"> * @method	static	void	belongsToMany(string  $related, string  $table, string  $foreignKey, string  $otherKey)	Define a many-to-many relationship.</span></div><div class='line' id='LC141'><span class="sd"> * @method	static	string	joiningTable(string  $related)	Get the joining table name for a many-to-many relation.</span></div><div class='line' id='LC142'><span class="sd"> * @method	static	void	delete()	Delete the model from the database.</span></div><div class='line' id='LC143'><span class="sd"> * @method	static	bool	save()	Save the model to the database.</span></div><div class='line' id='LC144'><span class="sd"> * @method	static	mixed	freshTimestamp()	Get a fresh timestamp for the model.</span></div><div class='line' id='LC145'><span class="sd"> * @method	static	void	newQuery()	Get a new query builder for the model&#39;s table.</span></div><div class='line' id='LC146'><span class="sd"> * @method	static	void	newCollection(array  $models)	Create a new Eloquent Collection instance.</span></div><div class='line' id='LC147'><span class="sd"> * @method	static	string	getTable()	Get the table associated with the model.</span></div><div class='line' id='LC148'><span class="sd"> * @method	static	void	setTable(string  $table)	Set the table associated with the model.</span></div><div class='line' id='LC149'><span class="sd"> * @method	static	mixed	getKey()	Get the value of the model&#39;s primary key.</span></div><div class='line' id='LC150'><span class="sd"> * @method	static	string	getKeyName()	Get the primary key for the model.</span></div><div class='line' id='LC151'><span class="sd"> * @method	static	bool	usesTimestamps()	Determine if the model uses timestamps.</span></div><div class='line' id='LC152'><span class="sd"> * @method	static	int	getPerPage()	Get the number of models to return per page.</span></div><div class='line' id='LC153'><span class="sd"> * @method	static	void	setPerPage(int   $perPage)	Set the number of models ot return per page.</span></div><div class='line' id='LC154'><span class="sd"> * @method	static	string	getForeignKey()	Get the default foreign key name for the model.</span></div><div class='line' id='LC155'><span class="sd"> * @method	static	array	getHidden()	Get the hidden attributes for the model.</span></div><div class='line' id='LC156'><span class="sd"> * @method	static	void	setHidden(array  $hidden)	Set the hidden attributes for the model.</span></div><div class='line' id='LC157'><span class="sd"> * @method	static	array	getFillable()	Get the fillable attributes for the model.</span></div><div class='line' id='LC158'><span class="sd"> * @method	static	void	fillable(array  $fillable)	Set the fillable attributes for the model.</span></div><div class='line' id='LC159'><span class="sd"> * @method	static	void	guard(array  $guarded)	Set the guarded attributes for the model.</span></div><div class='line' id='LC160'><span class="sd"> * @method	static	bool	isFillable(string  $key)	Determine if the given attribute may be mass assigned.</span></div><div class='line' id='LC161'><span class="sd"> * @method	static	bool	getIncrementing()	Get the value indicating whether the IDs are incrementing.</span></div><div class='line' id='LC162'><span class="sd"> * @method	static	void	setIncrementing(bool  $value)	Set whether IDs are incrementing.</span></div><div class='line' id='LC163'><span class="sd"> * @method	static	string	toJson(int  $options)	Convert the model instance to JSON.</span></div><div class='line' id='LC164'><span class="sd"> * @method	static	array	toArray()	Convert the model instance to an array.</span></div><div class='line' id='LC165'><span class="sd"> * @method	static	array	relationsToArray()	Get the model&#39;s relationships in array form.</span></div><div class='line' id='LC166'><span class="sd"> * @method	static	mixed	getAttribute(string  $key)	Get an attribute from the model.</span></div><div class='line' id='LC167'><span class="sd"> * @method	static	bool	hasGetMutator(string  $key)	Determine if a get mutator exists for an attribute.</span></div><div class='line' id='LC168'><span class="sd"> * @method	static	void	setAttribute(string  $key, mixed   $value)	Set a given attribute on the model.</span></div><div class='line' id='LC169'><span class="sd"> * @method	static	bool	hasSetMutator(string  $key)	Determine if a set mutator exists for an attribute.</span></div><div class='line' id='LC170'><span class="sd"> * @method	static	array	getAttributes()	Get all of the current attributes on the model.</span></div><div class='line' id='LC171'><span class="sd"> * @method	static	void	setRawAttributes(array  $attributes, bool   $sync)	Set the array of model attributes. No checking is done.</span></div><div class='line' id='LC172'><span class="sd"> * @method	static	array	getOriginal(string|null  $key, mixed  $default)	Get the model&#39;s original attribute values.</span></div><div class='line' id='LC173'><span class="sd"> * @method	static	void	syncOriginal()	Sync the original attributes with the current.</span></div><div class='line' id='LC174'><span class="sd"> * @method	static	mixed	getRelation(string  $relation)	Get a specified relationship.</span></div><div class='line' id='LC175'><span class="sd"> * @method	static	void	setRelation(string  $relation, mixed   $value)	Set the specific relationship in the model.</span></div><div class='line' id='LC176'><span class="sd"> * @method	static	void	getConnection()	Get the database connection for the model.</span></div><div class='line' id='LC177'><span class="sd"> * @method	static	string	getConnectionName()	Get the current connection name for the model.</span></div><div class='line' id='LC178'><span class="sd"> * @method	static	void	setConnection(string  $name)	Set the connection associated with the model.</span></div><div class='line' id='LC179'><span class="sd"> * @method	static	void	resolveConnection(string  $connection)	Resolve a connection instance by name.</span></div><div class='line' id='LC180'><span class="sd"> * @method	static	void	getConnectionResolver()	Get the connection resolver instance.</span></div><div class='line' id='LC181'><span class="sd"> * @method	static	void	setConnectionResolver(Illuminate\Database\ConnectionResolverInterface  $resolver)	Set the connection resolver instance.</span></div><div class='line' id='LC182'><span class="sd"> */</span></div><div class='line' id='LC183'><span class="k">class</span> <span class="nc">Eloquent</span> <span class="k">extends</span> <span class="nx">Illuminate\Database\Eloquent\Model</span> <span class="p">{}</span></div><div class='line' id='LC184'><br/></div><div class='line' id='LC185'><span class="sd">/**</span></div><div class='line' id='LC186'><span class="sd"> * @method	static	bool	hasTable(string  $table)	Determine if the given table exists.</span></div><div class='line' id='LC187'><span class="sd"> * @method	static	void	table(string   $table, Closure  $callback)	Modify a table on the schema.</span></div><div class='line' id='LC188'><span class="sd"> * @method	static	void	create(string   $table, Closure  $callback)	Create a new table on the schema.</span></div><div class='line' id='LC189'><span class="sd"> * @method	static	void	drop(string  $table)	Drop a table from the schema.</span></div><div class='line' id='LC190'><span class="sd"> * @method	static	void	dropIfExists(string  $table)	Drop a table from the schema if it exists.</span></div><div class='line' id='LC191'><span class="sd"> * @method	static	void	rename(string  $from, string  $to)	Rename a table on the schema.</span></div><div class='line' id='LC192'><span class="sd"> * @method	static	void	getConnection()	Get the database connection instance.</span></div><div class='line' id='LC193'><span class="sd"> * @method	static	void	setConnection(Illuminate\Database\Connection)	Set the database connection instance.</span></div><div class='line' id='LC194'><span class="sd"> */</span></div><div class='line' id='LC195'><span class="k">class</span> <span class="nc">Schema</span> <span class="k">extends</span> <span class="nx">Illuminate\Database\Schema\Builder</span> <span class="p">{}</span></div><div class='line' id='LC196'><br/></div><div class='line' id='LC197'><span class="sd">/**</span></div><div class='line' id='LC198'><span class="sd"> * @method	static	string	encrypt(string  $value)	Encrypt the given value.</span></div><div class='line' id='LC199'><span class="sd"> * @method	static	string	decrypt(string  $value)	Decrypt the given value.</span></div><div class='line' id='LC200'><span class="sd"> */</span></div><div class='line' id='LC201'><span class="k">class</span> <span class="nc">Crypt</span> <span class="k">extends</span> <span class="nx">Illuminate\Encryption\Encrypter</span> <span class="p">{}</span></div><div class='line' id='LC202'><br/></div><div class='line' id='LC203'><span class="sd">/**</span></div><div class='line' id='LC204'><span class="sd"> * @method	static	void	stop()	Stop the propagation of the event to other listeners.</span></div><div class='line' id='LC205'><span class="sd"> * @method	static	bool	isStopped()	Determine if the event has been stopped from propagating.</span></div><div class='line' id='LC206'><span class="sd"> */</span></div><div class='line' id='LC207'><span class="k">class</span> <span class="nc">Event</span> <span class="k">extends</span> <span class="nx">Illuminate\Events\Event</span> <span class="p">{}</span></div><div class='line' id='LC208'><br/></div><div class='line' id='LC209'><span class="sd">/**</span></div><div class='line' id='LC210'><span class="sd"> * @method	static	bool	exists(string  $path)	Determine if a file exists.</span></div><div class='line' id='LC211'><span class="sd"> * @method	static	string	get(string  $path)	Get the contents of a file.</span></div><div class='line' id='LC212'><span class="sd"> * @method	static	string	getRemote(string  $path)	Get the contents of a remote file.</span></div><div class='line' id='LC213'><span class="sd"> * @method	static	mixed	getRequire(string  $path)	Get the returned value of a file.</span></div><div class='line' id='LC214'><span class="sd"> * @method	static	void	requireOnce(string  $file)	Require the given file once.</span></div><div class='line' id='LC215'><span class="sd"> * @method	static	int	put(string  $path, string  $contents)	Write the contents of a file.</span></div><div class='line' id='LC216'><span class="sd"> * @method	static	int	append(string  $path, string  $data)	Append to a file.</span></div><div class='line' id='LC217'><span class="sd"> * @method	static	bool	delete(string  $path)	Delete the file at a given path.</span></div><div class='line' id='LC218'><span class="sd"> * @method	static	void	move(string  $path, string  $target)	Move a file to a new location.</span></div><div class='line' id='LC219'><span class="sd"> * @method	static	void	copy(string  $path, string  $target)	Copy a file to a new location.</span></div><div class='line' id='LC220'><span class="sd"> * @method	static	string	extension(string  $path)	Extract the file extension from a file path.</span></div><div class='line' id='LC221'><span class="sd"> * @method	static	string	type(string  $path)	Get the file type of a given file.</span></div><div class='line' id='LC222'><span class="sd"> * @method	static	int	size(string  $path)	Get the file size of a given file.</span></div><div class='line' id='LC223'><span class="sd"> * @method	static	int	lastModified(string  $path)	Get the file&#39;s last modification time.</span></div><div class='line' id='LC224'><span class="sd"> * @method	static	bool	isDirectory(string  $directory)	Determine if the given path is a directory.</span></div><div class='line' id='LC225'><span class="sd"> * @method	static	array	glob(string  $pattern, int     $flags)	Find path names matching a given pattern.</span></div><div class='line' id='LC226'><span class="sd"> * @method	static	array	filetype(string  $directory)	Get an array of all files in a directory.</span></div><div class='line' id='LC227'><span class="sd"> * @method	static	bool	makeDirectory(string  $path, int     $mode, bool    $recursive)	Create a directory.</span></div><div class='line' id='LC228'><span class="sd"> * @method	static	void	copyDirectory(string  $directory, string  $destination, int     $options)	Copy a directory from one location to another.</span></div><div class='line' id='LC229'><span class="sd"> * @method	static	void	deleteDirectory(string  $directory, bool    $preserve)	Recursively delete a directory.</span></div><div class='line' id='LC230'><span class="sd"> * @method	static	void	cleanDirectory(string  $directory)	Empty the specified directory of all files and folders.</span></div><div class='line' id='LC231'><span class="sd"> */</span></div><div class='line' id='LC232'><span class="k">class</span> <span class="nc">File</span> <span class="k">extends</span> <span class="nx">Illuminate\Filesystem\Filesystem</span> <span class="p">{}</span></div><div class='line' id='LC233'><br/></div><div class='line' id='LC234'><span class="sd">/**</span></div><div class='line' id='LC235'><span class="sd"> * @method	static	string	getBootstrapFile()	Get the application bootstrap file.</span></div><div class='line' id='LC236'><span class="sd"> * @method	static	void	registerAliasLoader(array  $aliases)	Register the aliased class loader.</span></div><div class='line' id='LC237'><span class="sd"> * @method	static	void	ExceptionServiceProvider()	Start the exception handling for the request.</span></div><div class='line' id='LC238'><span class="sd"> * @method	static	string	detectEnvironment(array|string  $environments)	Detect the application&#39;s current environment.</span></div><div class='line' id='LC239'><span class="sd"> * @method	static	bool	runningInConsole()	Determine if we are running in the console.</span></div><div class='line' id='LC240'><span class="sd"> * @method	static	bool	runningUnitTests()	Determine if we are running unit tests.</span></div><div class='line' id='LC241'><span class="sd"> * @method	static	void	register(Illuminate\Support\ServiceProvider  $provider, array  $options)	Register a service provider with the application.</span></div><div class='line' id='LC242'><span class="sd"> * @method	static	mixed	make(string  $abstract, array   $parameters)	Resolve the given type from the container.</span></div><div class='line' id='LC243'><span class="sd"> * @method	static	void	booting(mixed  $callback)	Register a new boot event listener.</span></div><div class='line' id='LC244'><span class="sd"> * @method	static	void	before(Closure|string  $callback)	Register a &quot;before&quot; application filter.</span></div><div class='line' id='LC245'><span class="sd"> * @method	static	void	after(Closure|string  $callback)	Register an &quot;after&quot; application filter.</span></div><div class='line' id='LC246'><span class="sd"> * @method	static	void	close(Closure|string  $callback)	Register a &quot;close&quot; application filter.</span></div><div class='line' id='LC247'><span class="sd"> * @method	static	void	finish(Closure|string  $callback)	Register a &quot;finish&quot; application filter.</span></div><div class='line' id='LC248'><span class="sd"> * @method	static	void	run()	Handles the given request and delivers the response.</span></div><div class='line' id='LC249'><span class="sd"> * @method	static	void	dispatch(Illuminate\Foundation\Request  $request)	Handle the given request and get the response.</span></div><div class='line' id='LC250'><span class="sd"> * @method	static	void	handle(Illuminate\Foundation\Request  $request, int   $type, bool  $catch)	Handle the given request and get the response.</span></div><div class='line' id='LC251'><span class="sd"> * @method	static	void	prepareRequest(Illuminate\Foundation\Request  $request)	Prepare the request by injecting any services.</span></div><div class='line' id='LC252'><span class="sd"> * @method	static	void	prepareResponse(mixed  $value, Illuminate\Foundation\Request  $request)	Prepare the given value as a Response object.</span></div><div class='line' id='LC253'><span class="sd"> * @method	static	void	setLocale(string  $locale)	Set the current application locale.</span></div><div class='line' id='LC254'><span class="sd"> * @method	static	void	abort(int     $code, string  $message, array   $headers)	Throw an HttpException with the given data.</span></div><div class='line' id='LC255'><span class="sd"> * @method	static	void	error(Closure  $callback)	Register an application error handler.</span></div><div class='line' id='LC256'><span class="sd"> * @method	static	void	NotFoundHttpException(Closure  $callback)	Register a 404 error handler.</span></div><div class='line' id='LC257'><span class="sd"> * @method	static	array	getLoadedProviders()	Get the service providers that have been loaded.</span></div><div class='line' id='LC258'><span class="sd"> * @method	static	void	setDeferredServices(array  $services)	Set the application&#39;s deferred services.</span></div><div class='line' id='LC259'><span class="sd"> */</span></div><div class='line' id='LC260'><span class="k">class</span> <span class="nc">App</span> <span class="k">extends</span> <span class="nx">Illuminate\Foundation\Application</span> <span class="p">{}</span></div><div class='line' id='LC261'><br/></div><div class='line' id='LC262'><span class="sd">/**</span></div><div class='line' id='LC263'><span class="sd"> * @method	static	void	call(string  $command, array   $parameters, Symfony\Component\Console\Output\OutputInterface  $output)	Run an Artisan console command by name.</span></div><div class='line' id='LC264'><span class="sd"> */</span></div><div class='line' id='LC265'><span class="k">class</span> <span class="nc">Artisan</span> <span class="k">extends</span> <span class="nx">Illuminate\Foundation\Artisan</span> <span class="p">{}</span></div><div class='line' id='LC266'><br/></div><div class='line' id='LC267'><span class="sd">/**</span></div><div class='line' id='LC268'><span class="sd"> * @method	static	array	make(string  $value)	Hash the given value.</span></div><div class='line' id='LC269'><span class="sd"> * @method	static	bool	check(string  $value, string  $hashedValue, array   $options)	Check the given plain value against a hash.</span></div><div class='line' id='LC270'><span class="sd"> */</span></div><div class='line' id='LC271'><span class="k">class</span> <span class="nc">Hash</span> <span class="k">extends</span> <span class="nx">Illuminate\Hashing\BcryptHasher</span> <span class="p">{}</span></div><div class='line' id='LC272'><br/></div><div class='line' id='LC273'><span class="sd">/**</span></div><div class='line' id='LC274'><span class="sd"> * @method	static	void	instance()	Return the Request instance.</span></div><div class='line' id='LC275'><span class="sd"> * @method	static	string	root()	Get the root URL for the application.</span></div><div class='line' id='LC276'><span class="sd"> * @method	static	string	url()	Get the URL (no query string) for the request.</span></div><div class='line' id='LC277'><span class="sd"> * @method	static	string	fullUrl()	Get the full URL for the request.</span></div><div class='line' id='LC278'><span class="sd"> * @method	static	string	path()	Get the current path info for the request.</span></div><div class='line' id='LC279'><span class="sd"> * @method	static	bool	is(string  $pattern)	Determine if the current request URI matches a pattern.</span></div><div class='line' id='LC280'><span class="sd"> * @method	static	bool	ajax()	Determine if the request is the result of an AJAX call.</span></div><div class='line' id='LC281'><span class="sd"> * @method	static	bool	secure()	Determine if the request is over HTTPS.</span></div><div class='line' id='LC282'><span class="sd"> * @method	static	bool	has(string|array  $key)	Determine if the request contains a given input item.</span></div><div class='line' id='LC283'><span class="sd"> * @method	static	array	all()	Get all of the input and files for the request.</span></div><div class='line' id='LC284'><span class="sd"> * @method	static	string	input(string  $key, mixed   $default)	Retrieve an input item from the request.</span></div><div class='line' id='LC285'><span class="sd"> * @method	static	array	only(array  $keys)	Get a subset of the items from the input data.</span></div><div class='line' id='LC286'><span class="sd"> * @method	static	array	except(array  $keys)	Get all of the input except for a specified array of items.</span></div><div class='line' id='LC287'><span class="sd"> * @method	static	string	query(string  $key, mixed   $default)	Retrieve a query string item from the request.</span></div><div class='line' id='LC288'><span class="sd"> * @method	static	string	cookie(string  $key, mixed   $default)	Retrieve a cookie from the request.</span></div><div class='line' id='LC289'><span class="sd"> * @method	static	void	file(string  $key, mixed   $default)	Retrieve a file from the request.</span></div><div class='line' id='LC290'><span class="sd"> * @method	static	bool	hasFile(string  $key)	Determine if the uploaded data contains a file.</span></div><div class='line' id='LC291'><span class="sd"> * @method	static	string	header(string  $key, mixed   $default)	Retrieve a header from the request.</span></div><div class='line' id='LC292'><span class="sd"> * @method	static	string	server(string  $key, mixed   $default)	Retrieve a server variable from the request.</span></div><div class='line' id='LC293'><span class="sd"> * @method	static	string	old(string  $key, mixed   $default)	Retrieve an old input item.</span></div><div class='line' id='LC294'><span class="sd"> * @method	static	void	flash(string $filter, array  $keys)	Flash the input for the current request to the session.</span></div><div class='line' id='LC295'><span class="sd"> * @method	static	void	flashOnly(dynamic  string)	Flash only some of the input to the session.</span></div><div class='line' id='LC296'><span class="sd"> * @method	static	void	flashExcept(dynamic  string)	Flash only some of the input to the session.</span></div><div class='line' id='LC297'><span class="sd"> * @method	static	void	flush()	Flush all of the old input from the session.</span></div><div class='line' id='LC298'><span class="sd"> * @method	static	void	merge(array  $input)	Merge new input into the current request&#39;s input array.</span></div><div class='line' id='LC299'><span class="sd"> * @method	static	void	replace(array  $input)	Replace the input for the current request.</span></div><div class='line' id='LC300'><span class="sd"> * @method	static	object	json()	Get the JSON payload for the request.</span></div><div class='line' id='LC301'><span class="sd"> * @method	static	void	getSessionStore()	Get the Illuminate session store implementation.</span></div><div class='line' id='LC302'><span class="sd"> * @method	static	void	setSessionStore(Illuminate\Session\Store  $session)	Set the Illuminate session store implementation.</span></div><div class='line' id='LC303'><span class="sd"> */</span></div><div class='line' id='LC304'><span class="k">class</span> <span class="nc">Input</span> <span class="k">extends</span> <span class="nx">Illuminate\Http\Request</span> <span class="p">{}</span></div><div class='line' id='LC305'><br/></div><div class='line' id='LC306'><span class="sd">/**</span></div><div class='line' id='LC307'><span class="sd"> * @method	static	void	instance()	Return the Request instance.</span></div><div class='line' id='LC308'><span class="sd"> * @method	static	string	root()	Get the root URL for the application.</span></div><div class='line' id='LC309'><span class="sd"> * @method	static	string	url()	Get the URL (no query string) for the request.</span></div><div class='line' id='LC310'><span class="sd"> * @method	static	string	fullUrl()	Get the full URL for the request.</span></div><div class='line' id='LC311'><span class="sd"> * @method	static	string	path()	Get the current path info for the request.</span></div><div class='line' id='LC312'><span class="sd"> * @method	static	bool	is(string  $pattern)	Determine if the current request URI matches a pattern.</span></div><div class='line' id='LC313'><span class="sd"> * @method	static	bool	ajax()	Determine if the request is the result of an AJAX call.</span></div><div class='line' id='LC314'><span class="sd"> * @method	static	bool	secure()	Determine if the request is over HTTPS.</span></div><div class='line' id='LC315'><span class="sd"> * @method	static	bool	has(string|array  $key)	Determine if the request contains a given input item.</span></div><div class='line' id='LC316'><span class="sd"> * @method	static	array	all()	Get all of the input and files for the request.</span></div><div class='line' id='LC317'><span class="sd"> * @method	static	string	input(string  $key, mixed   $default)	Retrieve an input item from the request.</span></div><div class='line' id='LC318'><span class="sd"> * @method	static	array	only(array  $keys)	Get a subset of the items from the input data.</span></div><div class='line' id='LC319'><span class="sd"> * @method	static	array	except(array  $keys)	Get all of the input except for a specified array of items.</span></div><div class='line' id='LC320'><span class="sd"> * @method	static	string	query(string  $key, mixed   $default)	Retrieve a query string item from the request.</span></div><div class='line' id='LC321'><span class="sd"> * @method	static	string	cookie(string  $key, mixed   $default)	Retrieve a cookie from the request.</span></div><div class='line' id='LC322'><span class="sd"> * @method	static	void	file(string  $key, mixed   $default)	Retrieve a file from the request.</span></div><div class='line' id='LC323'><span class="sd"> * @method	static	bool	hasFile(string  $key)	Determine if the uploaded data contains a file.</span></div><div class='line' id='LC324'><span class="sd"> * @method	static	string	header(string  $key, mixed   $default)	Retrieve a header from the request.</span></div><div class='line' id='LC325'><span class="sd"> * @method	static	string	server(string  $key, mixed   $default)	Retrieve a server variable from the request.</span></div><div class='line' id='LC326'><span class="sd"> * @method	static	string	old(string  $key, mixed   $default)	Retrieve an old input item.</span></div><div class='line' id='LC327'><span class="sd"> * @method	static	void	flash(string $filter, array  $keys)	Flash the input for the current request to the session.</span></div><div class='line' id='LC328'><span class="sd"> * @method	static	void	flashOnly(dynamic  string)	Flash only some of the input to the session.</span></div><div class='line' id='LC329'><span class="sd"> * @method	static	void	flashExcept(dynamic  string)	Flash only some of the input to the session.</span></div><div class='line' id='LC330'><span class="sd"> * @method	static	void	flush()	Flush all of the old input from the session.</span></div><div class='line' id='LC331'><span class="sd"> * @method	static	void	merge(array  $input)	Merge new input into the current request&#39;s input array.</span></div><div class='line' id='LC332'><span class="sd"> * @method	static	void	replace(array  $input)	Replace the input for the current request.</span></div><div class='line' id='LC333'><span class="sd"> * @method	static	object	json()	Get the JSON payload for the request.</span></div><div class='line' id='LC334'><span class="sd"> * @method	static	void	getSessionStore()	Get the Illuminate session store implementation.</span></div><div class='line' id='LC335'><span class="sd"> * @method	static	void	setSessionStore(Illuminate\Session\Store  $session)	Set the Illuminate session store implementation.</span></div><div class='line' id='LC336'><span class="sd"> */</span></div><div class='line' id='LC337'><span class="k">class</span> <span class="nc">Request</span> <span class="k">extends</span> <span class="nx">Illuminate\Http\Request</span> <span class="p">{}</span></div><div class='line' id='LC338'><br/></div><div class='line' id='LC339'><span class="sd">/**</span></div><div class='line' id='LC340'><span class="sd"> * @var	static	void	original	The original content of the response.</span></div><div class='line' id='LC341'><span class="sd"> * @method	static	void	withCookie(Symfony\Component\HttpFoundation\Cookie  $cookie)	Add a cookie to the response.</span></div><div class='line' id='LC342'><span class="sd"> * @method	static	void	setContent(mixed  $content)	Set the content on the response.</span></div><div class='line' id='LC343'><span class="sd"> * @method	static	mixed	getOriginalContent()	Get the original response content.</span></div><div class='line' id='LC344'><span class="sd"> */</span></div><div class='line' id='LC345'><span class="k">class</span> <span class="nc">Response</span> <span class="k">extends</span> <span class="nx">Illuminate\Http\Response</span> <span class="p">{}</span></div><div class='line' id='LC346'><br/></div><div class='line' id='LC347'><span class="sd">/**</span></div><div class='line' id='LC348'><span class="sd"> * @method	static	void	useFiles(string  $path, string  $level)	Register a file log handler.</span></div><div class='line' id='LC349'><span class="sd"> * @method	static	void	useDailyFiles(string  $path, int     $days, string  $level)	Register a daily file log handler.</span></div><div class='line' id='LC350'><span class="sd"> * @method	static	void	getMonolog()	Get the underlying Monolog instance.</span></div><div class='line' id='LC351'><span class="sd"> */</span></div><div class='line' id='LC352'><span class="k">class</span> <span class="nc">Log</span> <span class="k">extends</span> <span class="nx">Illuminate\Log\Writer</span> <span class="p">{}</span></div><div class='line' id='LC353'><br/></div><div class='line' id='LC354'><span class="sd">/**</span></div><div class='line' id='LC355'><span class="sd"> * @method	static	void	alwaysFrom(string  $address, string  $name)	Set the global from address and name.</span></div><div class='line' id='LC356'><span class="sd"> * @method	static	void	send(string|array    $view, array           $data, Closure|string  $callback)	Send a new message using a view.</span></div><div class='line' id='LC357'><span class="sd"> * @method	static	void	pretend(bool  $value)	Tell the mailer to not really send messages.</span></div><div class='line' id='LC358'><span class="sd"> * @method	static	void	getViewEnvironment()	Get the view environment instance.</span></div><div class='line' id='LC359'><span class="sd"> * @method	static	Swift_Mailer	getSwiftMailer()	Get the Swift Mailer instance.</span></div><div class='line' id='LC360'><span class="sd"> * @method	static	void	setSwiftMailer(Swift_Mailer  $swift)	Set the Swift Mailer instance.</span></div><div class='line' id='LC361'><span class="sd"> * @method	static	void	setLogger(Illuminate\Log\Writer  $logger)	Set the log writer instance.</span></div><div class='line' id='LC362'><span class="sd"> * @method	static	void	setContainer(Illuminate\Container  $container)	Set the IoC container instance.</span></div><div class='line' id='LC363'><span class="sd"> */</span></div><div class='line' id='LC364'><span class="k">class</span> <span class="nc">Mail</span> <span class="k">extends</span> <span class="nx">Illuminate\Mail\Mailer</span> <span class="p">{}</span></div><div class='line' id='LC365'><br/></div><div class='line' id='LC366'><span class="sd">/**</span></div><div class='line' id='LC367'><span class="sd"> * @method	static	void	setupPaginationContext()	Setup the pagination context (current and last page).</span></div><div class='line' id='LC368'><span class="sd"> * @method	static	void	links()	Get the pagination links view.</span></div><div class='line' id='LC369'><span class="sd"> * @method	static	string	getUrl(int     $page)	Get a URL for a given page number.</span></div><div class='line' id='LC370'><span class="sd"> * @method	static	void	addQuery(string  $key, string  $value)	Add a query string value to the paginator.</span></div><div class='line' id='LC371'><span class="sd"> * @method	static	int	getCurrentPage()	Get the current page for the request.</span></div><div class='line' id='LC372'><span class="sd"> * @method	static	int	getLastPage()	Get the last page that should be available.</span></div><div class='line' id='LC373'><span class="sd"> * @method	static	array	getItems()	Get the items being paginated.</span></div><div class='line' id='LC374'><span class="sd"> * @method	static	int	getTotal()	Get the total number of items in the collection.</span></div><div class='line' id='LC375'><span class="sd"> * @method	static	ArrayIterator	getIterator()	Get an iterator for the items.</span></div><div class='line' id='LC376'><span class="sd"> * @method	static	int	count()	Get the number of items for the current page.</span></div><div class='line' id='LC377'><span class="sd"> * @method	static	bool	offsetExists(mixed  $key)	Determine if the given item exists.</span></div><div class='line' id='LC378'><span class="sd"> * @method	static	mixed	offsetGet(mixed  $key)	Get the item at the given offset.</span></div><div class='line' id='LC379'><span class="sd"> * @method	static	void	offsetSet(mixed  $key, mixed  $value)	Set the item at the given offset.</span></div><div class='line' id='LC380'><span class="sd"> * @method	static	void	offsetUnset(mixed  $key)	Unset the item at the given key.</span></div><div class='line' id='LC381'><span class="sd"> */</span></div><div class='line' id='LC382'><span class="k">class</span> <span class="nc">Paginator</span> <span class="k">extends</span> <span class="nx">Illuminate\Pagination\Paginator</span> <span class="p">{}</span></div><div class='line' id='LC383'><br/></div><div class='line' id='LC384'><span class="sd">/**</span></div><div class='line' id='LC385'><span class="sd"> * @method	static	void	connect()	Connect to the Redis database.</span></div><div class='line' id='LC386'><span class="sd"> * @method	static	mixed	command(string  $method, array   $parameters)	Run a command against the Redis database.</span></div><div class='line' id='LC387'><span class="sd"> * @method	static	string	buildCommand(string  $method, array   $parameters)	Build the Redis command syntax.</span></div><div class='line' id='LC388'><span class="sd"> * @method	static	mixed	parseResponse(string  $response)	Parse the Redis database response.</span></div><div class='line' id='LC389'><span class="sd"> * @method	static	string	fileRead(int     $bytes)	Read the specified number of bytes from the file resource.</span></div><div class='line' id='LC390'><span class="sd"> * @method	static	string	fileGet(int     $bytes)	Get the specified number of bytes from a file line.</span></div><div class='line' id='LC391'><span class="sd"> * @method	static	void	fileWrite(string  $commnad)	Write the given command to the file resource.</span></div><div class='line' id='LC392'><span class="sd"> * @method	static	resource	getConnection()	Get the Redis socket connection.</span></div><div class='line' id='LC393'><span class="sd"> */</span></div><div class='line' id='LC394'><span class="k">class</span> <span class="nc">Redis</span> <span class="k">extends</span> <span class="nx">Illuminate\Redis\Database</span> <span class="p">{}</span></div><div class='line' id='LC395'><br/></div><div class='line' id='LC396'><span class="sd">/**</span></div><div class='line' id='LC397'><span class="sd"> * @method	static	void	back(int    $status, array  $headers)	Create a new redirect response to the previous location.</span></div><div class='line' id='LC398'><span class="sd"> * @method	static	void	to(string  $path, int     $status, array   $headers, bool    $secure)	Create a new redirect response to the given path.</span></div><div class='line' id='LC399'><span class="sd"> * @method	static	void	secure(string  $path, int     $status, array   $headers)	Create a new redirect response to the given HTTPS path.</span></div><div class='line' id='LC400'><span class="sd"> * @method	static	void	route(string  $route, array   $parameters, int     $status, array   $headers)	Create a new redirect response to a named route.</span></div><div class='line' id='LC401'><span class="sd"> * @method	static	void	action(string  $action, array   $parameters, int     $status, array   $headers)	Create a new redirect response to a controller action.</span></div><div class='line' id='LC402'><span class="sd"> * @method	static	void	setSession(Illuminate\Session\Store  $session)	Set the active session store.</span></div><div class='line' id='LC403'><span class="sd"> */</span></div><div class='line' id='LC404'><span class="k">class</span> <span class="nc">Redirect</span> <span class="k">extends</span> <span class="nx">Illuminate\Routing\Redirector</span> <span class="p">{}</span></div><div class='line' id='LC405'><br/></div><div class='line' id='LC406'><span class="sd">/**</span></div><div class='line' id='LC407'><span class="sd"> * @method	static	void	get(string  $pattern, mixed   $action)	Add a new route to the collection.</span></div><div class='line' id='LC408'><span class="sd"> * @method	static	void	post(string  $pattern, mixed   $action)	Add a new route to the collection.</span></div><div class='line' id='LC409'><span class="sd"> * @method	static	void	put(string  $pattern, mixed   $action)	Add a new route to the collection.</span></div><div class='line' id='LC410'><span class="sd"> * @method	static	void	patch(string  $pattern, mixed   $action)	Add a new route to the collection.</span></div><div class='line' id='LC411'><span class="sd"> * @method	static	void	delete(string  $pattern, mixed   $action)	Add a new route to the collection.</span></div><div class='line' id='LC412'><span class="sd"> * @method	static	void	match(string  $method, string  $pattern, mixed   $action)	Add a new route to the collection.</span></div><div class='line' id='LC413'><span class="sd"> * @method	static	void	any(string  $pattern, mixed   $action)	Add a new route to the collection.</span></div><div class='line' id='LC414'><span class="sd"> * @method	static	void	controllers(array  $controllers)	Register an array of controllers with wildcard routing.</span></div><div class='line' id='LC415'><span class="sd"> * @method	static	void	controller(string  $controller, string  $uri)	Route a controller to a URI with wildcard routing.</span></div><div class='line' id='LC416'><span class="sd"> * @method	static	void	resource(string  $resource, string  $controller, array   $options)	Route a resource to a controller.</span></div><div class='line' id='LC417'><span class="sd"> * @method	static	void	group(array    $attributes, Closure  $callback)	Create a route group with shared attributes.</span></div><div class='line' id='LC418'><span class="sd"> * @method	static	void	makeReferences(Illuminate\Routing\Route  $route, string  $original)	Replace any route back-references in a route.</span></div><div class='line' id='LC419'><span class="sd"> * @method	static	void	dispatch(Symfony\Component\HttpFoundation\Request  $request)	Get the response for a given request.</span></div><div class='line' id='LC420'><span class="sd"> * @method	static	void	before(Closure|string  $callback)	Register a &quot;before&quot; routing filter.</span></div><div class='line' id='LC421'><span class="sd"> * @method	static	void	after(Closure|string  $callback)	Register an &quot;after&quot; routing filter.</span></div><div class='line' id='LC422'><span class="sd"> * @method	static	void	close(Closure|string  $callback)	Register a &quot;close&quot; routing filter.</span></div><div class='line' id='LC423'><span class="sd"> * @method	static	void	finish(Closure|string  $callback)	Register a &quot;finish&quot; routing filters.</span></div><div class='line' id='LC424'><span class="sd"> * @method	static	void	addFilter(string   $name, Closure|string  $callback)	Register a new filter with the application.</span></div><div class='line' id='LC425'><span class="sd"> * @method	static	Closure	getFilter(string   $name)	Get a registered filter callback.</span></div><div class='line' id='LC426'><span class="sd"> * @method	static	void	matchFilter(string  $pattern, string|array  $names)	Tie a registered filter to a URI pattern.</span></div><div class='line' id='LC427'><span class="sd"> * @method	static	array	findPatternFilters(Illuminate\Foundation\Request  $request)	Find the patterned filters matching a request.</span></div><div class='line' id='LC428'><span class="sd"> * @method	static	mixed	callFinishFilter(Symfony\Component\HttpFoundation\Request   $request, Symfony\Component\HttpFoundation\Response  $response)	Call the &quot;finish&quot; global filter.</span></div><div class='line' id='LC429'><span class="sd"> * @method	static	void	prepare(mixed  $value, Illuminate\Foundation\Request  $request)	Prepare the given value as a Response object.</span></div><div class='line' id='LC430'><span class="sd"> * @method	static	bool	currentRouteNamed(string  $name)	Determine if the current route has a given name.</span></div><div class='line' id='LC431'><span class="sd"> * @method	static	bool	currentRouteUses(string  $action)	Determine if the current route uses a given controller action.</span></div><div class='line' id='LC432'><span class="sd"> * @method	static	bool	filtersEnabled()	Determine if route filters are enabled.</span></div><div class='line' id='LC433'><span class="sd"> * @method	static	void	enableFilters()	Enable the running of filters.</span></div><div class='line' id='LC434'><span class="sd"> * @method	static	void	disableFilters()	Disable the runnning of all filters.</span></div><div class='line' id='LC435'><span class="sd"> * @method	static	void	getRequest()	Get the current request being dispatched.</span></div><div class='line' id='LC436'><span class="sd"> * @method	static	void	getCurrentRoute()	Get the current route being executed.</span></div><div class='line' id='LC437'><span class="sd"> * @method	static	void	setCurrentRoute(Illuminate\Routing\Route  $route)	Set the current route on the router.</span></div><div class='line' id='LC438'><span class="sd"> * @method	static	void	getRoutes()	Retrieve the entire route collection.</span></div><div class='line' id='LC439'><span class="sd"> * @method	static	void	setContainer(Illuminate\Container  $container)	Set the container instance on the router.</span></div><div class='line' id='LC440'><span class="sd"> */</span></div><div class='line' id='LC441'><span class="k">class</span> <span class="nc">Route</span> <span class="k">extends</span> <span class="nx">Illuminate\Routing\Router</span> <span class="p">{}</span></div><div class='line' id='LC442'><br/></div><div class='line' id='LC443'><span class="sd">/**</span></div><div class='line' id='LC444'><span class="sd"> * @method	static	string	to(string  $path, array   $parameters, bool    $secure)	Generate a absolute URL to the given path.</span></div><div class='line' id='LC445'><span class="sd"> * @method	static	string	secure(string  $path)	Generate a secure, absolute URL to the given path.</span></div><div class='line' id='LC446'><span class="sd"> * @method	static	string	asset(string  $path, bool    $secure)	Generate a URL to an application asset.</span></div><div class='line' id='LC447'><span class="sd"> * @method	static	string	secureAsset(string  $path)	Generate a URL to a secure asset.</span></div><div class='line' id='LC448'><span class="sd"> * @method	static	string	route(string  $name, array   $parameters, bool    $absolute)	Get the URL to a named route.</span></div><div class='line' id='LC449'><span class="sd"> * @method	static	string	action(string  $action, array   $parameters, bool    $absolute)	Get the URL to a controller action.</span></div><div class='line' id='LC450'><span class="sd"> * @method	static	bool	isValidUrl(string  $path)	Determine if the given path is a valid URL.</span></div><div class='line' id='LC451'><span class="sd"> * @method	static	void	getRequest()	Get the request instance.</span></div><div class='line' id='LC452'><span class="sd"> * @method	static	void	setRequest(Symfony\Component\HttpFoundation\Request  $request)	Set the current request instance.</span></div><div class='line' id='LC453'><span class="sd"> * @method	static	void	getGenerator()	Get the Symfony URL generator instance.</span></div><div class='line' id='LC454'><span class="sd"> * @method	static	void	setGenerator(Symfony\Component\Routing\Generator\UrlGenerator  $generator)	Get the Symfony URL generator instance.</span></div><div class='line' id='LC455'><span class="sd"> */</span></div><div class='line' id='LC456'><span class="k">class</span> <span class="nc">URL</span> <span class="k">extends</span> <span class="nx">Illuminate\Routing\UrlGenerator</span> <span class="p">{}</span></div><div class='line' id='LC457'><br/></div><div class='line' id='LC458'><span class="sd">/**</span></div><div class='line' id='LC459'><span class="sd"> * @method	static	void	beforeFilter(string  $filter, array   $options)	Register a new &quot;before&quot; filter on the controller.</span></div><div class='line' id='LC460'><span class="sd"> * @method	static	void	afterFilter(string  $filter, array   $options)	Register a new &quot;after&quot; filter on the controller.</span></div><div class='line' id='LC461'><span class="sd"> * @method	static	void	callAction(Illuminate\Container  $container, Illuminate\Routing\Router  $router, string  $method, array   $parameters)	Execute an action on the controller.</span></div><div class='line' id='LC462'><span class="sd"> * @method	static	array	getFilters()	Get the code registered filters.</span></div><div class='line' id='LC463'><span class="sd"> */</span></div><div class='line' id='LC464'><span class="k">class</span> <span class="nc">Controller</span> <span class="k">extends</span> <span class="nx">Illuminate\Routing\Controllers\Controller</span> <span class="p">{}</span></div><div class='line' id='LC465'><br/></div><div class='line' id='LC466'><span class="sd">/**</span></div><div class='line' id='LC467'><span class="sd"> * @method	static	bool	has(string  $key, string  $locale)	Determine if a translation exists.</span></div><div class='line' id='LC468'><span class="sd"> * @method	static	string	get(string  $id, array   $parameters, string  $locale)	Get the translation for a given key.</span></div><div class='line' id='LC469'><span class="sd"> * @method	static	string	choice(string  $id, int     $number, array   $parameters, string  $locale)	Get a translation according to an integer value.</span></div><div class='line' id='LC470'><span class="sd"> * @method	static	string	trans(string  $id, array   $parameters, string  $domain, string  $locale)	Get the translation for a given key.</span></div><div class='line' id='LC471'><span class="sd"> * @method	static	string	transChoice(string  $id, int     $number, array   $parameters, string  $domain, string  $locale)	Get a translation according to an integer value.</span></div><div class='line' id='LC472'><span class="sd"> * @method	static	string	load(string  $group, string  $namespace, string  $locale)	Load the specified language group.</span></div><div class='line' id='LC473'><span class="sd"> * @method	static	void	addNamespace(string  $namespace, string  $hint)	Add a new namespace to the loader.</span></div><div class='line' id='LC474'><span class="sd"> * @method	static	string	getLocale()	Get the default locale being used.</span></div><div class='line' id='LC475'><span class="sd"> * @method	static	void	setLocale(string  $locale)	Set the default locale.</span></div><div class='line' id='LC476'><span class="sd"> * @method	static	void	getSymfonyTranslator()	Get the base Symfony translator instance.</span></div><div class='line' id='LC477'><span class="sd"> * @method	static	void	setSymfonyTranslator(Symfony\Translation\Translator  $trans)	Get the base Symfony translator instance.</span></div><div class='line' id='LC478'><span class="sd"> */</span></div><div class='line' id='LC479'><span class="k">class</span> <span class="nc">Lang</span> <span class="k">extends</span> <span class="nx">Illuminate\Translation\Translator</span> <span class="p">{}</span></div><div class='line' id='LC480'><br/></div><div class='line' id='LC481'><span class="sd">/**</span></div><div class='line' id='LC482'><span class="sd"> * @method	static	bool	passes()	Determine if the data passes the validation rules.</span></div><div class='line' id='LC483'><span class="sd"> * @method	static	bool	fails()	Determine if the data fails the validation rules.</span></div><div class='line' id='LC484'><span class="sd"> * @method	static	array	getExtensions()	Get the array of custom validator extensions.</span></div><div class='line' id='LC485'><span class="sd"> * @method	static	void	addExtensions(array  $extensions)	Register an array of custom validator extensions.</span></div><div class='line' id='LC486'><span class="sd"> * @method	static	void	addExtension(string   $rule, Closure  $extension)	Register a custom validator extension.</span></div><div class='line' id='LC487'><span class="sd"> * @method	static	array	getData()	Get the data under validation.</span></div><div class='line' id='LC488'><span class="sd"> * @method	static	void	setData(array  $data)	Set the data under validation.</span></div><div class='line' id='LC489'><span class="sd"> * @method	static	array	getRules()	Get the validation rules.</span></div><div class='line' id='LC490'><span class="sd"> * @method	static	array	getFiles()	Get the files under validation.</span></div><div class='line' id='LC491'><span class="sd"> * @method	static	void	setFiles(array  $files)	Set the files under validation.</span></div><div class='line' id='LC492'><span class="sd"> * @method	static	void	getPresenceVerifier()	Get the Presence Verifier implementation.</span></div><div class='line' id='LC493'><span class="sd"> * @method	static	void	setPresenceVerifier(Illuminate\Validation\PresenceVerifierInterface  $presenceVerifier)	Set the Presence Verifier implementation.</span></div><div class='line' id='LC494'><span class="sd"> * @method	static	void	getTranslator()	Get the Translator implementation.</span></div><div class='line' id='LC495'><span class="sd"> * @method	static	void	setTranslator(Symfony\Component\Translation\TranslatorInterface  $translator)	Set the Translator implementation.</span></div><div class='line' id='LC496'><span class="sd"> * @method	static	void	messages()	Get the message container for the validator.</span></div><div class='line' id='LC497'><span class="sd"> * @method	static	void	errors()	An alternative more semantic shortcut to the message container.</span></div><div class='line' id='LC498'><span class="sd"> * @method	static	void	getMessageBag()	Get the messages for the instance.</span></div><div class='line' id='LC499'><span class="sd"> */</span></div><div class='line' id='LC500'><span class="k">class</span> <span class="nc">Validator</span> <span class="k">extends</span> <span class="nx">Illuminate\Validation\Factory</span> <span class="p">{}</span></div><div class='line' id='LC501'><br/></div><div class='line' id='LC502'><span class="sd">/**</span></div><div class='line' id='LC503'><span class="sd"> * @method	static	void	make(string  $view, array   $data)	Get a evaluated view contents for the given view.</span></div><div class='line' id='LC504'><span class="sd"> * @method	static	string	renderEach(string  $view, array   $data, string  $iterator, string  $empty)	Get the rendered contents of a partial from a loop.</span></div><div class='line' id='LC505'><span class="sd"> * @method	static	void	share(string  $key, mixed   $value)	Add a piece of shared data to the environment.</span></div><div class='line' id='LC506'><span class="sd"> * @method	static	Closure	composer(string  $view, Closure|string  $callback)	Register a view composer event.</span></div><div class='line' id='LC507'><span class="sd"> * @method	static	void	callComposer(Illuminate\View\View  $view)	Call the composer for a given view.</span></div><div class='line' id='LC508'><span class="sd"> * @method	static	void	startSection(string  $section, string  $content)	Start injecting content into a section.</span></div><div class='line' id='LC509'><span class="sd"> * @method	static	void	inject(string  $section, string  $content)	Inject inline content into a section.</span></div><div class='line' id='LC510'><span class="sd"> * @method	static	string	yieldSection()	Stop injecting content into a section and return its contents.</span></div><div class='line' id='LC511'><span class="sd"> * @method	static	string	stopSection()	Stop injecting content into a section.</span></div><div class='line' id='LC512'><span class="sd"> * @method	static	string	yieldContent(string  $section)	Get the string contents of a section.</span></div><div class='line' id='LC513'><span class="sd"> * @method	static	void	flushSections()	Flush all of the section contents.</span></div><div class='line' id='LC514'><span class="sd"> * @method	static	void	incrementRender()	Increment the rendering counter.</span></div><div class='line' id='LC515'><span class="sd"> * @method	static	void	decrementRender()	Decrement the rendering counter.</span></div><div class='line' id='LC516'><span class="sd"> * @method	static	bool	doneRendering()	Check if there are no active render operations.</span></div><div class='line' id='LC517'><span class="sd"> * @method	static	void	addLocation(string  $location)	Add a location to the array of view locations.</span></div><div class='line' id='LC518'><span class="sd"> * @method	static	void	addNamespace(string  $namespace, string|array  $hints)	Add a new namespace to the loader.</span></div><div class='line' id='LC519'><span class="sd"> * @method	static	void	addExtension(string   $extension, string   $engine, Closure  $resolver)	Register a valid view extension and its engine.</span></div><div class='line' id='LC520'><span class="sd"> * @method	static	void	getEngineResolver()	Get the engine resolver instance.</span></div><div class='line' id='LC521'><span class="sd"> * @method	static	void	getFinder()	Get the view finder instance.</span></div><div class='line' id='LC522'><span class="sd"> * @method	static	void	getDispatcher()	Get the event dispatcher instance.</span></div><div class='line' id='LC523'><span class="sd"> * @method	static	void	getContainer()	Get the IoC container instance.</span></div><div class='line' id='LC524'><span class="sd"> * @method	static	void	setContainer(Illuminate\Container  $container)	Set the IoC container instance.</span></div><div class='line' id='LC525'><span class="sd"> * @method	static	array	getShared()	Get all of the shared data for the environment.</span></div><div class='line' id='LC526'><span class="sd"> * @method	static	array	getSections()	Get the entire array of sections.</span></div><div class='line' id='LC527'><span class="sd"> */</span></div><div class='line' id='LC528'><span class="k">class</span> <span class="nc">View</span> <span class="k">extends</span> <span class="nx">Illuminate\View\Environment</span> <span class="p">{}</span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.08130s from github-fe130-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>

