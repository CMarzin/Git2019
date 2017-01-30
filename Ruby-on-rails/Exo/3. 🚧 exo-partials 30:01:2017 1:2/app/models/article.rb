class Article < ApplicationRecord
  belongs_to :chapter

  def show

  end

  scope :published, -> {where.not(published_at: nil)}


end
