2.times do |a|
	main_chapter = Chapter.create({name: "Grand-chapitre #{a}", published_at: Time.now})
  puts "Chapter #{a}"

	3.times do |i|
		chapter = main_chapter.children.create({name: "Chapitre #{i}", published_at: Time.now, parent_id: a})
    puts "   Creating sous-chapters #{i}"

		2.times do |j|
			#Création d'un article
			chapter.articles.create({content: "Chp #{a}  SS-Chp #{i} Article numéro #{j}", chapter_id: i})
			puts "         article #{j} for sous-chapter #{i}"
		end
	end
end
