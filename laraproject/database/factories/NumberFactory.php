<?php

namespace Database\Factories;

use App\Models\Number;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class NumberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Number::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     'number' => $this->faker->randomNumber(),
        //     'tagline' => $this->faker->word(80),
        // ];
        Number::Create([
            'number' => 1,
            'tagline' => Son of Gun
        ]);
    }
}


// 1   Son of Gun
// 2   You and me
// 3   Buy 2 get 1 free
// 4   Murgi chor / Aar ya paar- number 4
// 5   Hum Panch/ shere punjab
// 6   In a fix/ bottom heavy
// 7   Lucky for all
// 8   Sexy babe at no.8/ one fat major/ one fat lady
// 9   U are mine/ doctor’s time
// 10  Dus numbari / badmash number 10
// 11  Those beautiful legs
// 12  Mid night/  one doz number
// 13  Lucky for some
// 14  Adolosence/ Valentines
// 15  Independence/ Still unkissed
// 16  Sweet 16/ just kissed
// 17  Not so sweet
// 18  Voting age
// 19  Last of the teens
// 20  Blind one score
// 21  The famous restaurant/ marriageable age
// 22  Two little ducks
// 23  You & me
// 24  Two doz number
// 25  Silver Jublee
// 26  Bole mere lips I love 26
// 27  A black raven
// 28  Out on a date
// 29  Rise & shine
// 30  Don’t play dirty/ women goes naught at 30 thirty
// 31  Baskin Robin’s
// 32  Binaca smile
// 33  All the three’s/ dirty knee
// 34  Lions roar
// 35  A flirty wife
// 36  Chatis ka Aankda
// 37  Lime & Lemon
// 38  Me & my fat mate
// 39  Watch your waist line
// 40  Men get naughty at 40
// 41  Kiss and run
// 42  Bharat chodo / Quit Indi
// 43  Climb a tree
// 44  Dil ke chor/ all the fours
// 45  Half way thru
// 46  Choke, chake maro
// 47  Independence
// 48  U are not late
// 49  Marooning Line/ your waistline
// 50  Golden Jubliee/ half a century
// 51  Auspicious
// 52  Pack of the cards
// 53  Pack with joker/ A little wild but free
// 54  House of bamboo door
// 55  All the fives/ dono bhai
// 56  Whisky, Beer do not mix
// 57  Banegi baat at panch aur saat
// 58  Retirement age
// 59  Do I hear a line at 59
// 60  3 Score
// 61  Done- dana-dan done
// 62  Over haul is due
// 63  Kisses come free
// 64  Hardcore
// 65  Harem of wives
// 66  All the 6’s click 66
// 67  Haath mein haath 6 aur 7
// 68  Mota seth
// 69  Anyway up/ ulta pulta
// 70  Lucky Blind
// 71  Setting sun
// 72  A different view
// 73  Savitriji
// 74  Still want more
// 75  Diamond jubilee
// 76  Run out of tricks
// 77  Two hockey sticks/ thanda lemon
// 78  Wipe the slate
// 79  Old and senile
// 80  Blind 4 score
// 81  Said and done
// 82  Down with flu
// 83  Grandma’s age
// 84  Haggard and bored
// 85  Still alive
// 86  Pick up a walking stick
// 87  Nearing heaven
// 88  Two fat majors
// 89  Penultimate
// 90  Top of the house blind 90

// ==========================================================================

// No	Option 1	Option 2	Option 3	Option 4	Option 5
// 1	Lone ranger	Buttered scone	Top of the house number 1	Son of a gun	At the beginning
// 2	One little duck	Me and you	Kaala dhan	Doctor who	
// 3	Happy family	goodness me			
// 4	Murgi chor	Knock at the door	Hum 2 hamare 2		
// 5	Hum paanch	Symbol of congress	Punjab da puttar	Fingers in your hand	
// 6	Bottom heavy	Chopping sticks	Super sixer	In a fix	
// 7	Lucky no. Seven	One hockey stick	God’s in Heaven	days in a week	Colours of rainbow
// 8	One fat major	Garden gate	Big fat lady number 8		
// 9	You are mine	Number of planets	Doctor’s time		
// 10	A big fat hen	Cock and hen	Uncle Ben		
// 11	Two heavenly legs	Two beautiful legs	Sexy legs		
// 12	One dozen	Monkeys cousin, one dozen			
// 13	Bakers dozen	Unlucky for some lucky for me no			
// 14	Valentine’s Day	Tender chick			
// 15	Yet to be kissed				
// 16	Sweet sixteen	never been kissed			
// 17	Dancing Queen	Not so sweet			
// 18	Voting age				
// 19	Last of the teens	End of teens	Goodbye teens		
// 20	One score	Blind 20			
// 21	President’s salute	All womens age			
// 22	Two little ducks				
// 23	You and me				
// 24	Two dozen	Want somemore at 24			
// 25	Quarter	Silver Jublee Number	Wish to have a wife at 25	Duck & dive @ 25	
// 26	Republic Day				
// 27	Gateway to heaven				
// 28	Duck and its mate	Overweight @ 28	In a state		
// 29	In your prime	Gin & Wine	Rise & shine		
// 30	Women get flirty at 30				
// 31	Time for fun	Flavours at baskin Robins	Get up and run		
// 32	Mouth Full	Buckle my shoe			
// 33	All the 3s	Two little bees			
// 34	Dil mange more	Ask for more	Lions roar		
// 35	Flirty wife	Jump and jive			
// 36	Popular size	Three dozens	Yardstick		
// 37	Mixed luck	More than eleven	Lime and leamon		
// 38	Oversize	Christmas cake			
// 39	Watch your waistline				
// 40	Naughty 40	Life begins at	Men get naughty		
// 41	Life’s begun at 41	Time for some fun @ 41	Kiss and run		
// 42	Quit India Movement	Winnie the pooh			
// 43	Pain in the knee	Down on your knees	Climb a tree		
// 44	All the fours	Chor chor, all the 4			
// 45	Halfway there				
// 46	Up to tricks				
// 47	Year of Independence	Four and seven			
// 48	Four dozen	You are not late			
// 49	Rise and shine	Your waist line			
// 50	Half a century	Golden Jublee			
// 51	Charity begins at 51	I love my mum			
// 52	Pack of cards	Weeks in a year			
// 53	Stuck in a tree				
// 54	Clean the floor	House of bamboo door			
// 55	All the fives	Bunch of 5s	Snakes alive @ 55		
// 56	Pick up sticks	Was she worth it?			
// 57	Mutiny Year				
// 58	Make them wait	Time to retire			
// 59	Just retired				
// 60	Five dozen				
// 61	Bakers bun				
// 62	Turn the screw	Click the two			
// 63	Tickle me	Click the three			
// 64	Hard core	Catch the chor			
// 65	Old age pension				
// 66	Chakke pe chakka	All the 6s			
// 67	Made in heaven				
// 68	Check your weight	Saving grace			
// 69	Your place or mine	Ulta Pulta			
// 70	Lucky blind				
// 71	Bang the drum	Lucky bachelor			
// 72	Lucky 2				
// 73	Under the tree	A crutch and a flea			
// 74	Still want more	Lucky chor	Candy store	Lucky 4	
// 75	Lucky Five	Diamond Jublee			
// 76	Lucky six				
// 77	Two hockey sticks	hum saat saat hai	Double hockey sticks		
// 78	Heaven’s gate	Lucky seth (hindi)			
// 79	One more time	lucky nine			
// 80	Gandhi’s breakfast				
// 81	Corner shot				
// 82	Last of the two	Fat lady with a duck			
// 83	India wins Cricket World Cup	Time for tea			
// 84	Last of the chors	Seven dozen			
// 85	Staying alive	Grandma			
// 86	Between the sticks	Last six			
// 87	Grandpa	Fat lady with a crutch			
// 88	Two fat ladies				
// 89	All but one	Nearly there			
// 90	Top of the house	End of the line	As far as we go		
