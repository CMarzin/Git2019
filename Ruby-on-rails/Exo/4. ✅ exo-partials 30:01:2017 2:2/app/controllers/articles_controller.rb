class ArticlesController < ApplicationController
  before_action :fetch_article, only: [:show]

  def index
    @articles = Article.all
  end

  def show
    @article.increment!(:views_count, 1)

  end

  private
    def fetch_article
      @article = Article.published.find(params[:id])
    end
end
