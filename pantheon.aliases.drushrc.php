<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['about-the-cyber-security.test'] = array(
    'uri' => 'test-about-the-cyber-security.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ead2ed488c014df4af80e58d80a76821@dbserver.test.4d0d98c0-93d7-4434-bc54-2e4415a19912.drush.in:23319/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.4d0d98c0-93d7-4434-bc54-2e4415a19912.drush.in',
    'remote-user' => 'test.4d0d98c0-93d7-4434-bc54-2e4415a19912',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['about-the-cyber-security.live'] = array(
    'uri' => 'live-about-the-cyber-security.pantheonsite.io',
    'db-url' => 'mysql://pantheon:bfca9d0d6fce48afaba8c933f5d596c7@dbserver.live.4d0d98c0-93d7-4434-bc54-2e4415a19912.drush.in:10801/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.4d0d98c0-93d7-4434-bc54-2e4415a19912.drush.in',
    'remote-user' => 'live.4d0d98c0-93d7-4434-bc54-2e4415a19912',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['about-the-cyber-security.dev'] = array(
    'uri' => 'dev-about-the-cyber-security.pantheonsite.io',
    'db-url' => 'mysql://pantheon:820d159c8bfa42d6921ddbb4ca791fff@dbserver.dev.4d0d98c0-93d7-4434-bc54-2e4415a19912.drush.in:23318/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.4d0d98c0-93d7-4434-bc54-2e4415a19912.drush.in',
    'remote-user' => 'dev.4d0d98c0-93d7-4434-bc54-2e4415a19912',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beginner-in-cyber-security.live'] = array(
    'uri' => 'live-beginner-in-cyber-security.pantheonsite.io',
    'db-url' => 'mysql://pantheon:570b36c2a101493d87208c7a8f3a2ca8@dbserver.live.b1180017-868a-4893-b2e8-f659e6de1678.drush.in:23233/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.b1180017-868a-4893-b2e8-f659e6de1678.drush.in',
    'remote-user' => 'live.b1180017-868a-4893-b2e8-f659e6de1678',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beginner-in-cyber-security.dev'] = array(
    'uri' => 'dev-beginner-in-cyber-security.pantheonsite.io',
    'db-url' => 'mysql://pantheon:5a9254cc90a240a6b166765e01d2f61f@dbserver.dev.b1180017-868a-4893-b2e8-f659e6de1678.drush.in:25044/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.b1180017-868a-4893-b2e8-f659e6de1678.drush.in',
    'remote-user' => 'dev.b1180017-868a-4893-b2e8-f659e6de1678',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beginner-in-cyber-security.test'] = array(
    'uri' => 'test-beginner-in-cyber-security.pantheonsite.io',
    'db-url' => 'mysql://pantheon:bab1c2d26641454993702bd512d4200a@dbserver.test.b1180017-868a-4893-b2e8-f659e6de1678.drush.in:20261/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.b1180017-868a-4893-b2e8-f659e6de1678.drush.in',
    'remote-user' => 'test.b1180017-868a-4893-b2e8-f659e6de1678',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
      '%drush-script' => 'drush',
     ),
  );
