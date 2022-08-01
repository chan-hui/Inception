# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: chanhuil <chanhuil@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/07/27 11:34:02 by chanhuil          #+#    #+#              #
#    Updated: 2022/08/01 15:26:51 by chanhuil         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

all: 
	docker-compose -f ./srcs/docker-compose.yml up

down:
	docker-compose -f ./srcs/docker-compose.yml down

re:
	docker-compose -f ./srcs/docker-compose.yml up --build

clean:
	docker rmi -f $$(docker images -qa);

.PHONY: all re down clean