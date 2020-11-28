<?php

use yii\db\Migration;

/**
 * Class m201128_073528_create_products_properties
 */
class m201128_073528_create_products_properties extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products_properties}}', [
            'id' => $this->primaryKey(),
            'productId' => $this->integer()->notNull()->comment('Товар'),
            'propertyId' => $this->integer()->notNull()->comment('Свойство'),
            'value' => $this->text()->notNull()->comment('Значение'),
            'createdAt' => $this->dateTime()->notNull()->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->comment('Дата изменения')
        ]);

        $this->addForeignKey('fk_products_properties_productId', '{{%products_properties}}', 'productId', '{{%products}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_products_properties_propertyId', '{{%products_properties}}', 'propertyId', '{{%properties}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_products_properties_productId', '{{%products_properties}}');
        $this->dropForeignKey('fk_products_properties_propertyId', '{{%products_properties}}');
        $this->dropTable('{{%products_properties}}');
    }
}
