"use strict";$(document).ready(function(){i18next.init({resources:{en:{translation:{key:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."}},es:{translation:{key:"Lorem Ipsum es simplemente un texto ficticio de la industria de impresiÃ³n y composiciÃ³n. Lorem Ipsum ha sido el texto ficticio estÃ¡ndar de la industria desde los aÃ±os 1500, cuando una impresora desconocida tomÃ³ una galera de tipo y la revolviÃ³ para hacer un libro de muestras tipo. Ha sobrevivido no sÃ³lo cinco siglos, sino tambiÃ©n el salto a la tipografÃ­a electrÃ³nica, permaneciendo esencialmente sin cambios. Fue popularizado en la dÃ©cada de 1960 con el lanzamiento de hojas de Letraset que contenÃ­an pasajes de Lorem Ipsum, y mÃ¡s recientemente con software de publicaciÃ³n como Aldus PageMaker incluyendo versiones de Lorem Ipsum."}},pt:{translation:{key:"Lorem Ipsum Ã© simplesmente um texto fictÃ­cio da indÃºstria grÃ¡fica e tipogrÃ¡fica. Lorem Ipsum tem sido o texto padrÃ£o do manequim da indÃºstria desde os anos 1500, quando uma impressora desconhecida tomou uma galera de tipo e mexidos-lo para fazer um livro tipo espÃ©cime. Ele sobreviveu nÃ£o apenas cinco sÃ©culos, mas tambÃ©m o salto para a composiÃ§Ã£o eletrÃ´nica, permanecendo essencialmente inalterado. Foi popularizado na dÃ©cada de 1960 com o lanÃ§amento de folhas Letraset contendo Lorem Ipsum passagens, e mais recentemente com software de editoraÃ§Ã£o como Aldus PageMaker incluindo versÃµes de Lorem Ipsum."}},fr:{translation:{key:"Lorem Ipsum est simplement un texte fictif de l'industrie de l'impression et de la composition. Lorem Ipsum a Ã©tÃ© le texte fictif standard de l'industrie depuis les annÃ©es 1500, lorsqu'une imprimante inconnue a pris une galÃ¨re de type et l'a brouillÃ©e pour faire un livre de spÃ©cimen de type. Il a survÃ©cu non seulement cinq siÃ¨cles, mais aussi le passage Ã  la composition Ã©lectronique, demeurant essentiellement inchangÃ©. Il a Ã©tÃ© popularisÃ© dans les annÃ©es 1960 avec la publication de feuilles de Letraset contenant des passages de Lorem Ipsum et plus rÃ©cemment avec des logiciels de publication assistÃ©e comme Aldus PageMaker, y compris des versions de Lorem Ipsum."}}},debug:!1},function(err,t){jqueryI18next.init(i18next,$)}),$("#navbarSupportedContent").on("click",".lng-nav li a",function(){var $this=$(this),selected_lng=$this.data("lng");i18next.changeLanguage(selected_lng,function(err,t){$(".translate-text").localize()}),$this.parent("li").siblings("li").children("a").removeClass("active"),$this.addClass("active"),$("#navbarSupportedContent").find(".lng-dropdown a").removeClass("active");var drop_lng=$("#navbarSupportedContent").find('.lng-dropdown a[data-lng="'+ selected_lng+'"]').addClass("active");$("#navbarSupportedContent #dropdown-active-item").html(drop_lng.html())}),$("#navbarSupportedContent").on("click",".lng-dropdown a",function(){var $this=$(this),selected_lng=$this.data("lng");i18next.changeLanguage(selected_lng,function(err,t){$(".translate-text").localize()}),$("#navbarSupportedContent .lng-nav li a").removeClass("active"),$('#navbarSupportedContent .lng-nav li a[data-lng="'+ selected_lng+'"]').addClass("active"),$("#navbarSupportedContent").find(".lng-dropdown a").removeClass("active"),$this.addClass("active"),$("#navbarSupportedContent #dropdown-active-item").html($this.html())})});