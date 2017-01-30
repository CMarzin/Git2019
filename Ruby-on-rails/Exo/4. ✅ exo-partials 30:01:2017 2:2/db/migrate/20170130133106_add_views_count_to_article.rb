class AddViewsCountToArticle < ActiveRecord::Migration[5.0]
  def change
    add_column :articles, :views_count, :integer,default: 0
  end
end
