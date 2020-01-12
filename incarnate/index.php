<?php
/**
 * @package    Joomla.Site
 * @subpackage Template.incarnate
 *
 * @author     ProNobis <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

require_once JPATH_THEMES . '/' . $this->template . '/helper.php';

tplIncarnateHelper::loadCss();
tplIncarnateHelper::loadJs();
tplIncarnateHelper::setMetadata();

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
    <link rel="shortcut icon" href="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/assets/images/favicon.ico" type="image/x-icon">
</head>
<body class="<?php echo tplIncarnateHelper::setBodySuffix(); ?>">
    <?php echo tplIncarnateHelper::setAnalytics(0, 'your-analytics-id'); ?>

    <a href="#main" class="sr-only sr-only-focusable"><?php echo Text::_('TPL_INCARNATE_SKIP_LINK_LABEL'); ?></a>

    <a href="<?php echo $this->baseurl; ?>/">
        <?php if ($this->params->get('sitedescription')) : ?>
            <?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8') . '</div>'; ?>
        <?php endif; ?>
    </a>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary inc-sticky-header" id="navbar">
        <a id="incarnate-logo" class="navbar-brand text-light" href="/"><img src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/assets/images/favicon-white-64x64.png">Incarnate Gaming</a>
        <button class="navbar-toggler bg-secondary text-light ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse overflow-auto" id="navbarSupportedContent">
            <jdoc:include type="modules" name="position-0" style="none" />
        </div>
    </nav>


    <main id="main" class="m-5">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
    </main>

    <aside>
        <?php if ($this->countModules('position-1')) : ?>
            <jdoc:include type="modules" name="position-1" style="none" />
        <?php endif; ?>
    </aside>

    <incarnateter>
        <jdoc:include type="modules" name="incarnateter" style="none" />
        <p>
            &copy; <?php echo date('Y'); ?> <?php echo tplIncarnateHelper::getSitename(); ?>
        </p>
        <div id="inc-top-html"></div>
        <div id="topButton"></div>
        <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/cookies.js"></script>
        <script>
            var incarnateDomain = '.incarnategamingllc.com';
        </script>
        <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/hooks.js"></script>
        <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/navFunctions.js"></script>
        <script>
            var IncarnateAnalyticsTag = 'UA-155417623-1';
        </script>
        <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/analytics.js"></script>
        <link rel="stylesheet" href="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/style/incBootstrap.css">
        <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/policyAccept.js"></script>
        <script>
            IncarnatePolicyAccept.policy = '/policy/8-website';
            IncarnatePolicyAccept.reject = '/policy/9-reject';
        </script>
        <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/orientation.js"></script>
    </incarnateter>
    <jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
