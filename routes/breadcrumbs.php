<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('recruitment-period', function (BreadcrumbTrail  $trail) {
  $trail->push('Recruitment Period', route('recruitment-period.index'));
});

Breadcrumbs::for('recruitment-period:create', function (BreadcrumbTrail  $trail) {
  $trail->parent('recruitment-period');
  $trail->push('Create New Period', route('recruitment-period.create'));
});
