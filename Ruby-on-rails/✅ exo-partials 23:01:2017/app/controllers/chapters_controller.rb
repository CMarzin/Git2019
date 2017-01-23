class ChaptersController < ApplicationController
  def index
    @chapters = Chapter.parents_only
  end








  def getOneChapter
    @chapter_id =  params[:id]
    @chapter = Chapter.where(id: @chapter_id )
  end

  def getBigChapters
    @chapters = Chapter.parents_only
  end
end
