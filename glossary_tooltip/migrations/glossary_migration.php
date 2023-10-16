namespace Drupal\custom_migration\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;

/**
 * Source plugin for the custom table.
 *
 * @MigrateSource(
 *   id = "libraries_table"
 * )
 */
class CustomMigration extends SqlBase {

  /**
   * {@inheritdoc}
   */
  public function query() {
    return $this->select('libraries_table', 'ct')
      ->fields('ct', [
        'id',
        'word_name',
        'description',
      ]);
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    return [
      'id' => $this->t('ID'),
      'word_name' => $this->t('Word Name'),
      'description' => $this->t('Description'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return [
      'id' => [
        'type' => 'integer',
        'alias' => 'ct',
      ],
    ];
  }

}
