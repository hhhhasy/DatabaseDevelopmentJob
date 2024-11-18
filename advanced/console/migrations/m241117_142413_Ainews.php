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
            'id' => $this->primaryKey(),                           // 新闻的唯一标识
            'title' => $this->string(255)->notNull(),               // 新闻标题
            'content' => $this->text()->notNull(),                  // 新闻内容
            'author' => $this->string(100),                         // 作者
            'published_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'), // 发布时间，默认当前时间
            'source' => $this->string(255),                         // 新闻来源
            'tags' => $this->string(255),                           // 相关新闻标签
            // 使用 string 类型代替 enum 类型
            'status' => $this->string(20)->defaultValue('draft'),    // 新闻状态，默认 'draft'
        ]);

        // 如果使用 MySQL 数据库，可以通过执行原生 SQL 来模拟 enum 类型
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
