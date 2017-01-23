Rails.application.routes.draw do
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html

  root to: 'chapters#index'

  get 'chapters/' => 'chapters#getBigChapters'
  get 'chapters/:id' => 'chapters#getOneChapter'
end
