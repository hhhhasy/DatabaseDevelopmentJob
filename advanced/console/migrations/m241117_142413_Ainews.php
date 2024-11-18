<?php

use yii\db\Migration;

/**
 * Class m241117_142413_Ainews
 */
class m241117_142413_Ainews extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	   $this->createTable('ai_news', [
            'id' => $this->primaryKey(),                           // ���ŵ�Ψһ��ʶ
            'title' => $this->string(255)->notNull(),               // ���ű���
            'content' => $this->text()->notNull(),                  // ��������
            'author' => $this->string(100),                         // ����
            'published_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'), // ����ʱ�䣬Ĭ�ϵ�ǰʱ��
            'source' => $this->string(255),                         // ������Դ
            'tags' => $this->string(255),                           // ������ű�ǩ
            // ʹ�� string ���ʹ��� enum ����
            'status' => $this->string(20)->defaultValue('draft'),    // ����״̬��Ĭ�� 'draft'
        ]);

        // ���ʹ�� MySQL ���ݿ⣬����ͨ��ִ��ԭ�� SQL ��ģ�� enum ����
        $this->execute("ALTER TABLE ai_news CHANGE COLUMN status status ENUM('draft', 'published', 'archived') DEFAULT 'draft';");

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241117_142413_Ainews cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241117_142413_Ainews cannot be reverted.\n";

        return false;
    }
    */
}
