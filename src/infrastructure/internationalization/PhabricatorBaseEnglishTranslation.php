<?php

abstract class PhabricatorBaseEnglishTranslation
  extends PhabricatorTranslation {

  final public function getLanguage() {
    return 'en';
  }

  public function getTranslations() {
    return array(
      'Differential Revision(s)' => array(
        'Differential Revision',
        'Differential Revisions',
      ),
      'file(s)' => array('file', 'files'),
      'Maniphest Task(s)' => array('Maniphest Task', 'Maniphest Tasks'),

      'Please fix these errors and try again.' => array(
        'Please fix this error and try again.',
        'Please fix these errors and try again.',
      ),

      '%d Error(s)' => array('%d Error', '%d Errors'),
      '%d Warning(s)' => array('%d Warning', '%d Warnings'),
      '%d Auto-Fix(es)' => array('%d Auto-Fix', '%d Auto-Fixes'),
      '%d Advice(s)' => array('%d Advice', '%d Pieces of Advice'),
      '%d Detail(s)' => array('%d Detail', '%d Details'),

      '(%d line(s))' => array('(%d line)', '(%d lines)'),

      'COMMIT(S)' => array('COMMIT', 'COMMITS'),

      '%d line(s)' => array('%d line', '%d lines'),

      'added %d commit(s): %s' => array(
        'added commit: %2$s',
        'added commits: %2$s',
      ),

      'removed %d commit(s): %s' => array(
        'removed commit: %2$s',
        'removed commits: %2$s',
      ),

      'changed %d commit(s), added %d: %s; removed %d: %s' =>
        'changed commits, added: %3$s; removed: %5$s',

      'ATTACHED %d COMMIT(S)' => array(
        'ATTACHED COMMIT',
        'ATTACHED COMMITS',
      ),

      'added %d dependencie(s): %s' => array(
        'added dependency: %2$s',
        'added dependencies: %2$s',
      ),

      'added %d dependent task(s): %s' => array(
        'added dependent task: %2$s',
        'added dependent tasks: %2$s',
      ),

      'removed %d dependencie(s): %s' => array(
        'removed dependency: %2$s',
        'removed dependencies: %2$s',
      ),

      'removed %d dependent task(s): %s' => array(
        'removed dependent task: %2$s',
        'removed dependent tasks: %2$s',
      ),

      'changed %d dependencie(s), added %d: %s; removed %d: %s' =>
        'changed dependencies, added: %3$s; removed: %5$s',

      'changed %d dependent task(s), added %d: %s; removed %d: %s',
        'changed dependent tasks, added: %3$s; removed: %5$s',

      'DEPENDENT %d TASK(s)' => array(
        'DEPENDENT TASK',
        'DEPENDENT TASKS',
      ),

      'DEPENDS ON %d TASK(S)' => array(
        'DEPENDS ON TASK',
        'DEPENDS ON TASKS',
      ),

      'DIFFERENTIAL %d REVISION(S)' => array(
        'DIFFERENTIAL REVISION',
        'DIFFERENTIAL REVISIONS',
      ),

      'added %d revision(s): %s' => array(
        'added revision: %2$s',
        'added revisions: %2$s',
      ),

      'removed %d revision(s): %s' => array(
        'removed revision: %2$s',
        'removed revisions: %2$s',
      ),

      'changed %d revision(s), added %d: %s; removed %d: %s' =>
        'changed revisions, added %3$s; removed %5$s',

      'There are %d raw fact(s) in storage.' => array(
        'There is %d raw fact in storage.',
        'There are %d raw facts in storage.',
      ),

      'There are %d aggregate fact(s) in storage.' => array(
        'There is %d aggregate fact in storage.',
        'There are %d aggregate facts in storage.',
      ),

      '%d Commit(s) Awaiting Audit' => array(
        '%d Commit Awaiting Audit',
        '%d Commits Awaiting Audit',
      ),

      '%d Problem Commit(s)' => array(
        '%d Problem Commit',
        '%d Problem Commits',
      ),

      '%d Review(s) Need Attention' => array(
        '%d Review Needs Attention',
        '%d Reviews Need Attention',
      ),

      '%d Review(s) Waiting on Others' => array(
        '%d Review Waiting on Others',
        '%d Reviews Waiting on Others',
      ),

      '%d Flagged Object(s)' => array(
        '%d Flagged Object',
        '%d Flagged Objects',
      ),

      '%d Unbreak Now Task(s)!' => array(
        '%d Unbreak Now Task!',
        '%d Unbreak Now Tasks!',
      ),

      '%d Assigned Task(s)' => array(
        '%d Assigned Task',
        '%d Assigned Tasks',
      ),

      'Show %d Lint Message(s)' => array(
        'Show %d Lint Message',
        'Show %d Lint Messages',
      ),
      'Hide %d Lint Message(s)' => array(
        'Hide %d Lint Message',
        'Hide %d Lint Messages',
      ),
      'Switch for %d Lint Message(s)' => array(
        'Switch for %d Lint Message',
        'Switch for %d Lint Messages',
      ),
      '%d Lint Message(s)' => array(
        '%d Lint Message',
        '%d Lint Messages',
      ),

      'This is a binary file. It is %2$s byte(s) in length.' => array(
        'This is a binary file. It is %2$s byte in length.',
        'This is a binary file. It is %2$s bytes in length.',
      ),

      '%d Action(s) Have No Effect' => array(
        'Action Has No Effect',
        'Actions Have No Effect',
      ),

      '%d Action(s) With No Effect' => array(
        'Action With No Effect',
        'Actions With No Effect',
      ),

      '%s added %d subscriber(s): %s.' => array(
        array(
          '%s added a subscriber: %3$s.',
          '%s added subscribers: %3$s.',
        ),
        array(
          '%s added a subscriber: %3$s.',
          '%s added subscribers: %3$s.',
        ),
      ),

      '%2$s Line(s)' => array(
        '%2$s Line',
        '%2$s Lines',
      ),

      "Indexing %d object(s) of type %s." => array(
        "Indexing %d object of type %s.",
        "Indexing %d object of type %s.",
      ),

      'Run these %d command(s):' => array(
        'Run this %d command:',
        'Run these %d commands:',
      ),

      'Install these %d PHP extension(s):' => array(
        'Install this %d PHP extension:',
        'Install these %d PHP extensions:',
      ),

      'The current Phabricator configuration has these %d value(s):' => array(
        'The current Phabricator configuration has this %d value:',
        'The current Phabricator configuration has these %d values:',
      ),

      'To update these %d value(s), run these command(s) from the command line:'
      => array(
        'To update this %d value, run this command from the command line:',
        'To update these %d values, run these commands from the command line:',
      ),

      'You can update these %d value(s) here:' => array(
        'You can update this %d value here:',
        'You can update these %d values here:',
      ),

      'The current PHP configuration has these %d value(s):' => array(
        'The current PHP configuration has this %d value:',
        'The current PHP configuration has these %d values:',
      ),

      'To update these %d value(s), edit your PHP configuration file.' => array(
        'To update this %d value, edit your PHP configuration file.',
        'To update these %d values, edit your PHP configuration file.',
      ),

      'To update these %d value(s), edit your PHP configuration file, located '.
      'here:' => array(
        'To update this %d value, edit your PHP configuration file, located '.
        'here:',
        'To update these %d values, edit your PHP configuration file, located '.
        'here:',
      ),

      'PHP also loaded these configuration file(s):' => array(
        'PHP also loaded this configuration file:',
        'PHP also loaded these configuration files:',
      ),

    );
  }

}
