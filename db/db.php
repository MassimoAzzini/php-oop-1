<?php

$productions = [
  new Movie('UNA NOTTE DA LEONI', ['Commedia'], ['Bradley Cooper', 'Ed Helms', 'Zack Galifianakis'], new Poster('una_notte_da_leoni.jpg', 'UNA NOTTE DA LEONI'), 2009, '1:39:00'),

  new Movie ('THE EQUALIZER 2', ['Azione'], ['Denzel Washington', 'Pedro Pascal', 'Ashton Sanders'], new Poster('the_equalizer_2.jpg', 'THE EQUALIZER 2'), 2018, '2:01:00'),

  new Movie ('BLOODSHOT', ['Azione', 'Fantasy'], ['Vin Diesel', 'Eiza Gonzalez', 'Guy Pearce'], new Poster('bloodshot.jpg', 'BLOODSHOT'), 2020, '1:48:00'),

  new TVSerie ('IL TRONO DI SPADE', ['Azione', 'Drammatico'], ['Sean Bean', 'Mark Addy', ' Peter Dinklage'], new Poster('il_trono_di_spade.jpg', 'IL TRONO DI SPADE '), 2011, 2019, 73, 8),

  new TVSerie ('THE WITCHER', ['Azione', 'Fantasy'], ['Henry Cavill', 'Anya Chalotra', 'Freya Allan'], new Poster('the_witcher.jpg', 'THE WITCHER'), 2019, 0, 24, 3),

  new TVSerie ('HOUSE OF CARDS', ['Politico', 'Drammatico'], ['Kevin Spacey', 'Robin Wright', 'Michael Kelly'], new Poster('house_of_cards.jpg', 'HOUSE OF CARDS'), 2013, 2018, 73, 6)

]

?>