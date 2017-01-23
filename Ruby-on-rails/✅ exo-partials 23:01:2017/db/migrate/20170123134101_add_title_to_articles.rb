class AddTitleToArticles < ActiveRecord::Migration[5.0]
  def change
    add_column :articles, :name, :string
  end
end
