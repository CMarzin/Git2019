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
	presentation = Chapter.create({name: "Presentation", published_at: Time.zone.now})

	introduction = Chapter.create({name: "Introduction"})
	rvm = introduction.children.create({name: "RVM", published_at: Time.zone.now})

	rvm.articles.create({name: "Ruby version", content: "Créer le fichier .ruby-version avec le contenu suivant: ruby-2.3.1. Ce fichier permet de décrire"})
	rvm.articles.create({name: "Ruby gemset", content: "Créer le fichier .ruby-gemset avec le contenu suivant: mydoc . Ce fichier permet de définir une sorte"})
	rvm.articles.create({name: "Reload rvm", content: "Pour recharger l'environnement virtuel il faut faire un cd . ou relancer la console"})

	rvm = introduction.children.create({name: "Initialisation des dépendances", published_at: Time.zone.now})
