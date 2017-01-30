module ApplicationHelper
  def sexy_date(date)
    return date.nil? ? 'date inconnue' : date.strftime("%d/%m/%Y")

    #date.try(:strftime, '%d/%m/%Y"')

    #date.strftime("%d/%m/%Y") rescue 'Date inconnue'
  end
  def safe_time_ago_in_words(date)
    return date.nil? ? '' : time_ago_in_words(date)
  end
end
