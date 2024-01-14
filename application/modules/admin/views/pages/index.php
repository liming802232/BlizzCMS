<section class="uk-section uk-section-xsmall" uk-height-viewport="expand: true">
  <div class="uk-container">
    <div class="uk-flex uk-flex-middle uk-margin" uk-grid>
      <div class="uk-width-expand">
        <ul class="uk-breadcrumb uk-margin-remove">
          <li><a href="<?= site_url('admin') ?>"><?= lang('dashboard') ?></a></li>
        </ul>
        <h1 class="uk-h3 uk-text-bold uk-margin-remove"><?= lang('pages') ?></h1>
      </div>
      <div class="uk-width-auto"></div>
    </div>
    <?= $template['partials']['alerts'] ?>
    <div class="uk-card uk-card-default">
      <div class="uk-card-header">
        <div class="uk-grid-small uk-flex uk-flex-middle" uk-grid>
          <div class="uk-width-expand">
            <h3 class="uk-card-title"><?= lang('pages') ?></h3>
          </div>
          <div class="uk-width-auto">
            <a href="<?= site_url('admin/pages/add') ?>" class="uk-button uk-button-default uk-button-small"><i class="fa-solid fa-pen"></i> <?= lang('add') ?></a>
          </div>
        </div>
      </div>
      <div class="uk-card-body uk-padding-remove">
        <table class="uk-table uk-table-middle uk-table-divider uk-table-small">
          <thead>
            <tr>
              <th class="uk-table-expand"><?= lang('title') ?></th>
              <th class="uk-width-small uk-visible@s"><?= lang('views') ?></th>
              <th class="uk-width-medium uk-visible@s"><?= lang('created_at') ?></th>
              <th class="uk-width-small"><?= lang('actions') ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pages as $item): ?>
            <tr>
              <td><?= $item->title ?></td>
              <td class="uk-visible@s"><?= $item->views ?></td>
              <td class="uk-visible@s">
                <time datetime="<?= $item->created_at ?>"><?= locate_date($item->created_at) ?></time>
              </td>
              <td>
                <div class="uk-button-group">
                  <a target="_blank" href="<?= site_url('page/'.$item->slug) ?>" class="uk-button uk-button-primary uk-button-small"><?= lang('view') ?></a>
                  <div class="uk-inline">
                    <button class="uk-button uk-button-primary uk-button-small" type="button"><i class="fa-solid fa-caret-down"></i></button>
                    <div uk-dropdown="mode: click; boundary: ! .uk-container">
                      <ul class="uk-nav uk-dropdown-nav">
                        <li><a href="<?= site_url('admin/pages/edit/'.$item->id) ?>"><span class="bc-li-icon"><i class="fa-solid fa-pen-to-square"></i></span><?= lang('edit') ?></a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="<?= site_url('admin/pages/delete/'.$item->id) ?>" class="uk-text-danger"><span class="bc-li-icon"><i class="fa-solid fa-trash-can"></i></span><?= lang('delete') ?></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    <?= $pagination ?>
  </div>
</section>
