# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: chanhuil <chanhuil@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/07/27 11:34:02 by chanhuil          #+#    #+#              #
#    Updated: 2022/08/02 16:09:39 by chanhuil         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

all: 
	docker-compose -f ./srcs/docker-compose.yml up

down:
	docker-compose -f ./srcs/docker-compose.yml down

re:
	docker-compose -f ./srcs/docker-compose.yml up --build

clean: down
	docker rmi -f $$(docker images -qa);\
	docker volume rm $$(docker volume ls -q);

.PHONY: all re down clean