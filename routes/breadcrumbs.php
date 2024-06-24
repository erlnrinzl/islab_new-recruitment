<?php

use App\Models\RecruitmentDetail;
use App\Models\RecruitmentPeriod;
use App\Models\RecruitmentType;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('recruitment-period.index', function (BreadcrumbTrail  $trail) {
  $trail->push('Recruitment Period', route('recruitment-period.index'));
});

Breadcrumbs::for('recruitment-period.create', function (BreadcrumbTrail  $trail) {
  $trail->parent('recruitment-period.index');
  $trail->push('Create New Period', route('recruitment-period.create'));
});

Breadcrumbs::for('recruitment-period.show', function (BreadcrumbTrail  $trail, RecruitmentPeriod $recruitmentPeriod) {
  $trail->parent('recruitment-period.index');
  $trail->push($recruitmentPeriod->period_name, route('recruitment-period.show', $recruitmentPeriod->id));
});

Breadcrumbs::for('recruitment-period.edit', function (BreadcrumbTrail  $trail, RecruitmentPeriod $recruitmentPeriod) {
  $trail->parent('recruitment-period.show', $recruitmentPeriod);
  $trail->push('Edit Recruitment Period', route('recruitment-period.show', $recruitmentPeriod->id));
});

// ---------------------------------------------------------------------------------------

Breadcrumbs::for('recruitment-detail.index', function (BreadcrumbTrail  $trail) {
  $trail->push('Recruitment Period Detail', route('recruitment-detail.index'));
});

Breadcrumbs::for('recruitment-detail.create', function (BreadcrumbTrail  $trail) {
  $trail->parent('recruitment-detail.index');
  $trail->push('Create New Detail', route('recruitment-detail.create'));
});

Breadcrumbs::for('recruitment-detail.show', function (BreadcrumbTrail  $trail, RecruitmentDetail $recruitmentDetail) {
  $trail->parent('recruitment-detail.index');
  $trail->push($recruitmentDetail->period->period_name, route('recruitment-detail.show', $recruitmentDetail->id));
});

Breadcrumbs::for('recruitment-detail.edit', function (BreadcrumbTrail  $trail, RecruitmentDetail $recruitmentDetail) {
  $trail->parent('recruitment-detail.show', $recruitmentDetail);
  $trail->push('Edit Recruitment Detail', route('recruitment-detail.edit', $recruitmentDetail->id));
});

// ---------------------------------------------------------------------------------------

Breadcrumbs::for('recruitment-type.index', function (BreadcrumbTrail  $trail) {
  $trail->push('Recruitment Role', route('recruitment-type.index'));
});

Breadcrumbs::for('recruitment-type.create', function (BreadcrumbTrail  $trail) {
  $trail->parent('recruitment-type.index');
  $trail->push('Create New Role', route('recruitment-type.create'));
});

Breadcrumbs::for('recruitment-type.show', function (BreadcrumbTrail  $trail, RecruitmentType $recruitmentType) {
  $trail->parent('recruitment-type.index');
  $trail->push($recruitmentType->type_name, route('recruitment-type.show', $recruitmentType->id));
});

Breadcrumbs::for('recruitment-type.edit', function (BreadcrumbTrail  $trail, RecruitmentType $recruitmentType) {
  $trail->parent('recruitment-type.show', $recruitmentType);
  $trail->push('Edit Recruitment Role', route('recruitment-type.edit', $recruitmentType->id));
});
