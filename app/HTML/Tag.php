<?php

namespace HTML;

/**
 * Class Tag
 * @method static Tag a()
 * @method static Tag abbr()
 * @method static Tag acronym()
 * @method static Tag address()
 * @method static Tag applet()
 * @method static Tag area()
 * @method static Tag article()
 * @method static Tag aside()
 * @method static Tag audio()
 *
 * @method static Tag b()
 * @method static Tag basefont()
 * @method static Tag bdi()
 * @method static Tag bdo()
 * @method static Tag bgsound()
 * @method static Tag blockquote()
 * @method static Tag big()
 * @method static Tag body()
 * @method static Tag blink()
 * @method static Tag br()
 * @method static Tag button()
 *
 * @method static Tag canvas()
 * @method static Tag caption()
 * @method static Tag center()
 * @method static Tag cite()
 * @method static Tag code()
 * @method static Tag col()
 * @method static Tag colgroup()
 * @method static Tag command()
 *
 * @method static Tag datalist()
 * @method static Tag dd()
 * @method static Tag del()
 * @method static Tag details()
 * @method static Tag dfn()
 * @method static Tag dir()
 * @method static Tag div()
 * @method static Tag dl()
 * @method static Tag dt()
 *
 * @method static Tag em()
 * @method static Tag embed()
 *
 * @method static Tag fieldset()
 * @method static Tag figcaption()
 * @method static Tag figure()
 * @method static Tag font()
 * @method static Tag form()
 * @method static Tag footer()
 * @method static Tag frame()
 * @method static Tag frameset()
 *
 * @method static Tag h1()
 * @method static Tag h2()
 * @method static Tag h3()
 * @method static Tag h4()
 * @method static Tag h5()
 * @method static Tag h6()
 * @method static Tag head()
 * @method static Tag header()
 * @method static Tag hgroup()
 * @method static Tag hr()
 * @method static Tag html()
 *
 * @method static Tag i()
 * @method static Tag iframe()
 * @method static Tag img()
 * @method static Tag input()
 * @method static Tag ins()
 * @method static Tag isindex()
 *
 * @method static Tag kbd()
 * @method static Tag keygen()
 *
 * @method static Tag label()
 * @method static Tag legend()
 * @method static Tag li()
 * @method static Tag link()
 *
 * @method static Tag main()
 * @method static Tag map()
 * @method static Tag marquee()
 * @method static Tag mark()
 * @method static Tag menu()
 * @method static Tag meta()
 * @method static Tag meter()
 *
 * @method static Tag nav()
 * @method static Tag nobr()
 * @method static Tag noembed()
 * @method static Tag noframes()
 * @method static Tag noscript()
 *
 * @method static Tag object()
 * @method static Tag ol()
 * @method static Tag optgroup()
 * @method static Tag option()
 * @method static Tag output()
 *
 * @method static Tag p()
 * @method static Tag param()
 * @method static Tag plaintext()
 * @method static Tag pre()
 * @method static Tag progress()
 *
 * @method static Tag q()
 *
 * @method static Tag s()
 * @method static Tag select()
 * @method static Tag strike()
 * @method static Tag summary()
 * @method static Tag samp()
 * @method static Tag small()
 * @method static Tag strong()
 * @method static Tag sup()
 * @method static Tag script()
 * @method static Tag span()
 * @method static Tag style()
 * @method static Tag section()
 * @method static Tag source()
 * @method static Tag sub()
 *
 * @method static Tag table()
 * @method static Tag tbody()
 * @method static Tag td()
 * @method static Tag textarea()
 * @method static Tag tfoot()
 * @method static Tag th()
 * @method static Tag thead()
 * @method static Tag time()
 * @method static Tag title()
 * @method static Tag tr()
 * @method static Tag tt()
 *
 * @method static Tag u()
 * @method static Tag ul()
 *
 * @method static Tag var()
 * @method static Tag video()
 *
 * @method static Tag wbr()
 *
 * @method static Tag xmp()
 */
class Tag extends BaseTag
{

    public static function __callStatic($name, $arguments): Tag
    {
        return new Tag($name);
    }

}