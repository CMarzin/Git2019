class CreateChapters < ActiveRecord::Migration[5.0]
  def change
    create_table :chapters do |t|
      t.string :name
      t.datetime :published_at
      t.integer :parent_id

      #t.references :chapter
      t.timestamps

    end
  end
end
