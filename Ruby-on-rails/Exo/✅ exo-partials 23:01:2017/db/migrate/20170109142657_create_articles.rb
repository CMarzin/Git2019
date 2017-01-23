class CreateArticles < ActiveRecord::Migration[5.0]
  def change
    create_table :articles do |t|
      t.text :content
      t.integer :user_id
      t.integer :chapter_id
      t.string :lang
      t.datetime :published_at

      t.timestamps
    end
  end
end
