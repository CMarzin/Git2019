class Chapter < ApplicationRecord
  has_many :articles

  belongs_to :parent, class_name: 'Chapter', :foreign_key => :parent_id, optional: true
  has_many :children, class_name: 'Chapter', :foreign_key => :parent_id,inverse_of: :parent


    # Chapter.parents_only
    scope :parents_only, -> {where(parent_id: nil)}
end
