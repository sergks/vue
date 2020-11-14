<?php

use yii\db\Migration;

/**
 * Class m201114_081725_add_url_to_products
 */
class m201114_081725_add_url_to_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%products}}', 'url', $this->string(128)->notNull()->comment('URL'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%products}}', 'url');
    }
}
