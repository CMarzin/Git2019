# 2.times do |a|
# 	main_chapter = Chapter.create({name: "Grand-chapitre #{a}", published_at: Time.now})
#   puts "Chapter #{a}"
#
# 	3.times do |i|
# 		chapter = main_chapter.children.create({name: "Chapitre #{i}", published_at: Time.now, parent_id: a})
#     puts "   Creating sous-chapters #{i}"
#
# 		2.times do |j|
# 			#Création d'un article
# 			chapter.articles.create({content: "Chp #{a}  SS-Chp #{i} Article numéro #{j}", chapter_id: i})
# 			puts "         article #{j} for sous-chapter #{i}"
# 		end
# 	end
# end



introduction = Chapter.create({name: "introduction", published_at: sexy_date(Time.zone.now)})
rvm = introduction.children.create({name: "RVM", published_at: sexy_date(Time.zone.now)})

rvm.articles.create({content: "Créer le fichier .ruby-version avec le contenu suivant: `ruby-2.3.1`. Ce fichier permet de décrire ",published_at: sexy_date(Time.zone.now)})
rvm.articles.create({content: "Créer le fichier .ruby-gemset avec le contenu suivant: `mydoc`. Ce fichier permet de définir ",published_at: sexy_date(Time.zone.now)})
rvm.articles.create({content: "Pour rechercher l'environnement il faut faire un `cd .` ou relancer la console.",published_at: sexy_date(Time.zone.now)})


introduction.children.create({name: "Initialisation des dépendances",published_at: sexy_date(Time.zone.now)});
