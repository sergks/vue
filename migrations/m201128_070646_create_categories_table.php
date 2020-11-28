<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 */
class m201128_070646_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull()->comment('Наименование'),
            'createdAt' => $this->dateTime()->notNull()->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->comment('Дата изменения')
        ]);

        $this->addColumn('{{%products}}', 'categoryId', $this->integer()->comment('Категория'));
        $this->addForeignKey('fk_products_categoryId', '{{%products}}', 'categoryId', '{{%categories}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_products_categoryId', '{{%products}}');
        $this->dropColumn('{{%products}}', 'categoryId');
        $this->dropTable('{{%categories}}');
    }
}
