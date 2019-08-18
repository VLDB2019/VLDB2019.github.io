<section class="program-schedule-phd-workshop">
    <h1>VLDB 2019: PhD Workshop</h1>
    <p>Proceedings available at <a href="http://ceur-ws.org/Vol-2399">CEUR-WS</a>.</p>

    <div class="schedule-wrap">
        <div>
            <div data-day="1">
                <abbr long="Monday" short="Mon"></abbr>
                <p><strong>26</strong><em>Aug</em></p>
            </div>
        </div>

        <div>
            <div class="schedule-head"><span class="schedule-time">9:00 &ndash; 10:30</span><strong class="main-title">Keynote</strong></div>
            
            <p class="schedule-item" data-id="">
                <strong class="schedule-item-title">Database Systems 2.0</strong>
                <span class="schedule-item-people">
                    <span class="author">Johannes&nbsp;Gehrke</span>&nbsp;(Microsoft)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    <strong class="schedule-part-label">Abstract:</strong>
                    Software 2.0 – the augmentation and replacement of traditional code with ML models, especially deep neural networks – is changing how we develop, deploy, and maintain software. In this talk, I will describe this transition and its associated challenges for the database community. I will conclude with a set of open research challenges.
                </span>

                <span class="schedule-item-bio">
                    <a class="schedule-item-action"></a>
                    <strong class="schedule-part-label">Bio:</strong>
                    Johannes Gehrke is a Technical Fellow at Microsoft. From 1999 to 2015, he was on the faculty in the Department of Computer Science at Cornell University where he advised 25 PhD students. He co-authored the undergraduate textbook "Database Management Systems" (McGrawHill, 2002), currently in its third edition. Johannes received the 2011 IEEE Computer Society Technical Achievement Award, and he is an ACM Fellow.
                </span>

            </p>


            <div class="schedule-head"><span class="schedule-time">10:30 &ndash; 11:00</span><strong class="sub-title">Coffee Break</strong></div>

            <div class="schedule-head"><span class="schedule-time">11:00 &ndash; 12:15</span><strong class="main-title">Technical Session 1: Big Data and Analytics</strong> (15 min each)</div>
            
            <p class="schedule-item" data-id="1097">
                <strong class="schedule-item-title">Efficient Scale-Out Using Query-Driven Workload Distribution and Fragment Allocation</strong>
                <span class="schedule-item-people">
                    <span class="author">Stefan&nbsp;Halfpap</span>&nbsp;(Hasso Plattner Institute)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Database replication is an approach for scaling throughput and ensuring high availability. Using workload knowledge, we are able to load-balance queries to replica nodes according to the data being accessed. However, balancing the load evenly while maximizing data reuse is a challenging allocation problem. To address large-size problems, we developed a novel decomposition-based heuristic using linear programming. We compare our approach with a rule-based state-of-the-art allocation algorithm using a real-world workload comprising thousands of queries. Further, we outline how we plan to extend our approach for versatile allocation problems, e.g., considering changing workloads and robustness against node failures.
                </span>

            </p>

            <p class="schedule-item" data-id="1105">
                <strong class="schedule-item-title">Adopting Markov Logic Networks for Big Spatial Data and Applications</strong>
                <span class="schedule-item-people">
                    <span class="author">Ibrahim&nbsp;Sabek</span>&nbsp;(University of Minnesota)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Spatial data has become ubiquitous everywhere, e.g., GPS data, medical data, with increasingly sheer sizes. This raises the need for efficient spatial machine learning and analysis solutions to extract useful insights from such data. Meanwhile, Markov Logic Networks (MLN) have emerged as powerful framework for building usable and scalable machine learning tools. Unfortunately, MLN is ill-equipped for spatial applications because it ignores the distinguished spatial data characteristics. This paper describes SMLN, the first full-fledged MLN framework with native support for spatial data. SMLN comes with a high-level datalog-like language with spatial constructs, and spatially-equipped grounding, inference and learning modules. We show the effectiveness of SMLN by illustrating three systems, namely, Sya, TurboReg, and Flash, that are already built using SMLN.
                </span>

            </p>

            <p class="schedule-item" data-id="1115">
                <strong class="schedule-item-title">Developing Big Data Analytics Architecture for Spatial Data</strong>
                <span class="schedule-item-people">
                    <span class="author">Purnima&nbsp;Shah</span>&nbsp;(School of Engineering and Applied Science, Ahmedabad University, India)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The main goal of the research work is to solve a wide range of data problems by offering batch, iterative, and interactive computations in a unified architecture. The dissertation proposes an integrated architecture to manage a large amount of massively distributed data including spatial data. The implementation architecture has three major components: data preparation, data analytics, and data visualization. As a part of the implementation, a novel big spatial data analytics framework is developed to load, store, process, and query spatial and non-spatial data at scale. As proof of concept, spatial analytics applications are developed using agricultural real-life datasets.
                </span>

            </p>

            <p class="schedule-item" data-id="1102">
                <strong class="schedule-item-title">Effective and Efficient Variable-Length Data Series Analytics</strong>
                <span class="schedule-item-people">
                    <span class="author">Michele&nbsp;Linardi</span>&nbsp;(University Paris Descartes)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In the last twenty years, data series similarity search has emerged as a fundamental operation at the core of several analysis tasks and applications related to data series collections. Many solutions to different mining problems work by means of similarity search. In this regard, all the proposed solutions require the prior knowledge of the series length on which similarity search is performed. In several cases, the choice of the length is critical and sensibly influences the quality of the expected outcome. Unfortunately, the obvious brute-force solution, which provides an outcome for all lengths within a given range is computationally untenable. In this Ph.D. work, we present the first solutions that inherently support scalable and variable-length similarity search in data series, applied to sequence/subsequences matching, motif and discord discovery problems. The experimental results show that our approaches are up to orders of magnitude faster than the alternatives. They also demonstrate that we can remove the unrealistic constraint of performing analytics using a predefined length, leading to more intuitive and actionable results, which would have otherwise been missed.
                </span>

            </p>

            <p class="schedule-item" data-id="1113">
                <strong class="schedule-item-title">From Distributed Sources to Distributed Sinks: Towards Truly Decentralized Event Stream Processing</strong>
                <span class="schedule-item-people">
                    <span class="author">Samira&nbsp;Akili</span>&nbsp;(HU Berlin)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Distributed stream processing evaluates queries over data produced by geographically distributed sources. To efficiently handle large amounts of decentralized data, whilst coping with bandwidth restrictions, applications employ in-network processing. To this end, a query is modularized and its operators are assigned to network nodes, especially those that act as data sources. The latter is known as the operator placement problem. Existing solutions to it, however, handle data generated by distributed sources, whereas query results are gathered at one designated node -- the sink. We argue that such single-sink solutions are not applicable for non-hierarchical system, in which multiple nodes need to be informed about query results. Also, having a single sink enforces centralisation in compositional applications, where the result of one query is the input to another query. This PhD project therefore aims to develop algorithms for multi-sink operator placement. We show that the computation of network costs for efficient operator placement, however, requires us to incorporate various aspects of event generation, query processing semantics, and network properties.
                </span>

            </p>


            <div class="schedule-head"><span class="schedule-time">12:15 &ndash; 14:00</span><strong class="sub-title">Lunch Break</strong></div>

            <div class="schedule-head"><span class="schedule-time">14:00 &ndash; 15:30</span><strong class="main-title">Keynote</strong></div>
            
            <p class="schedule-item" data-id="">
                <strong class="schedule-item-title">Structured Data Meets News</strong>
                <span class="schedule-item-people">
                    <span class="author">Cong&nbsp;Yu</span>&nbsp;(Google)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    <strong class="schedule-part-label">Abstract:</strong>
                    The news ecosystem is going through profound changes that will have long-lasting impact on our civic society. One of the key challenges in the news ecosystem is how to encourage content consumption that will bring informational values to the users instead of purely consuming users' attention via any (i.e., unhealthy) means necessary. As part of the talk, I will describe how structured data can play an important role in helping users consume content in a more healthy way and present my long term vision on how our research community can contribute to this important cause. In the rest of the talk, I will describe various technical efforts, within the Structured Data Research Group at Google AI and in partnership with many product teams, on improving news consumption at Google. One specific example is the question and answering summarization of news articles, where we combine structured data, machine learning, and natural language processing techniques to help users understand news articles quickly.
                </span>

                <span class="schedule-item-bio">
                    <a class="schedule-item-action"></a>
                    <strong class="schedule-part-label">Bio:</strong>
                    Cong Yu is a research scientist and manager at Google Research in New York City and leads the Structured Data Research Group. The group&#x2019;s mission is to understand and leverage structured data on the Web to enhance user experience for Google products and has been responsible for several impactful products such as Web Tables, Structured Snippets, and Fact Checking at Google. Currently, his group focuses on technical research for news and has been partnering with journalists and policy advisors to combat online misinformation and polarization and to improve news consumption. His research interests are structured data exploration and mining, computational journalism, machine learning, natural language processing, and scalable data analysis. He was a keynote speaker for VLDB 2019 and twice served as an industrial program co-chair for VLDB (2014 and 2018). Outside of Google, he periodically teaches at NYU Courant's Department of Computer Science. Before Google, Cong was a Research Scientist at Yahoo! Research, also in NYC. He has a PhD from the University of Michigan, Ann Arbor, advised by Prof. H.V. Jagadish.
                </span>

            </p>


            <div class="schedule-head"><span class="schedule-time">15:30 &ndash; 16:00</span><strong class="sub-title">Coffee Break</strong></div>

            <div class="schedule-head"><span class="schedule-time">16:00 &ndash; 17:15</span><strong class="main-title">Technical Session 2: Unconventional Data</strong> (15 min each)</div>
            
            <p class="schedule-item" data-id="1111">
                <strong class="schedule-item-title">Pre-Estimation of Electric Vehicle Energy Consumption on Unfamiliar Roads and Actual Driving Experiments</strong>
                <span class="schedule-item-people">
                    <span class="author">Toshiaki&nbsp;Uemura</span>&nbsp;(Yokohama National University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    For this study, we constructed a system for pre-estimation of electric vehicle (EV) energy consumption on unfamiliar roads. Drivers of EVs must make plans based on estimated energy consumption because they fear that an EV might run out of power and stop on the road. Our constructed system pre-estimates ranges at which an EV can be expected to be forced to stop on a road. The range is calculated using EV driving simulation on a route that is input by a driver. The driving simulation requires only map data and the EV car specifications. Moreover, we assessed a system using a real EV. Results show that the system produced sufficiently correct ranges on the roads used for experimentation. Additionally, we evaluated the accuracy of ranges output by our system. For evaluation, we used numerous accumulated daily driving logs for EVs.
                </span>

            </p>

            <p class="schedule-item" data-id="1116">
                <strong class="schedule-item-title">Biomedical Data Categorization and Integration using Human-in-the-loop Approach</strong>
                <span class="schedule-item-people">
                    <span class="author">Priya&nbsp;Deshpande</span>&nbsp;(DePaul University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Digitized world demands data integration systems that combine data repositories from multiple data sources. Vast amounts of existing clinical and biomedical research data are considered a primary force enabling data-driven research toward advancing health research and for introducing efficiencies in healthcare delivery. Data-driven research may have many goals, including but not limited to improved diagnostics processes, novel biomedical discoveries, epidemiology, and education. However, finding and gaining access to relevant data remains an elusive goal. We identified different data integration challenges and developed an Integrated Radiology Image Search (IRIS) framework that could be a step toward aiding data-driven research. We propose building a biomedical data categorization and integration framework using human-in-the-loop and developing data bridges to support search and retrieval of relevant documents from the integrated repository. My research focuses on biomedical data integration, indexing systems, and providing relevance-ranked document retrieval from an integrated repository. Although we currently focus on integrating biomedical data sources (for medical professionals), we believe that our proposed framework and methodologies can be used in other domains as well.
                </span>

            </p>

            <p class="schedule-item" data-id="1094">
                <strong class="schedule-item-title">Provenance-Based Routing in Probabilistic Graph Databases</strong>
                <span class="schedule-item-people">
                    <span class="author">Yann&nbsp;Ramusat</span>&nbsp;(ENS)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Optimizing routing queries over graphs is a rich research area with important applications, e.g., to road and transportation networks. Thanks to progress made during past decades, current-day systems are able to compute paths across cities in continent-sized areas, paths that are optimal in terms of distance or expected travel time. Nevertheless, the problem considered is very constrained, personal preferences cannot be handled effectively, and similar queries need to be computed separately. We explore a provenance-based framework as a way to extend the expressive power of routing queries, based on the idea of keeping track of meta-information about query results. This framework, useful to deal with such aspects as uncertainty or preferences, cannot always benefit of optimizations used for computing optimal routes, leading to impractical algorithms. The aim of our PhD is to improve on routing techniques based on provenance to apply them to real transportation networks.
                </span>

            </p>

            <p class="schedule-item" data-id="1096">
                <strong class="schedule-item-title">Make Informed Decisions: Understanding Query Results from Incomplete Databases</strong>
                <span class="schedule-item-people">
                    <span class="author">Poonam&nbsp;Kumari</span>&nbsp;(State University of New York at Buffalo)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Analyzing data has been central in making decisions whether it be a decision to buy stock or detect the chances of diabetes based on family history. Datasets used for analysis might include incomplete, inconsistent, missing data or might involve integrating two or more sources. Data quality management has been studied extensively with focus on tabular data. Lot of work has been done in terms of data curation and imputation, although visualization aspect of data quality management remains fairly unexplored. The aim of this PhD research is to focus on visualizing the imperfections in these datasets in order to help users analyze and interpret data and guide them to make informed decisions. We explore how different visualization techniques affect perceived data quality, accuracy and decision confidence.
                </span>

            </p>

            <p class="schedule-item" data-id="1117">
                <strong class="schedule-item-title">Optimized Spatio-Temporal Data Structures for Hybrid Transactional and Analytical Workloads on Columnar In-Memory Databases</strong>
                <span class="schedule-item-people">
                    <span class="author">Keven&nbsp;Richly</span>&nbsp;(Hasso Plattner Institute)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Rapid advances in location-acquisition technologies have led to large amounts of trajectory data. This data is the foundation for a broad spectrum of services driven and improved by trajectory data mining. However, for hybrid transactional and analytical workloads, the storing and processing of rapidly accumulated trajectory data is a non-trivial task. In this paper, we propose an approach to optimize the trajectory data management capabilities for relational database systems. Based on the observations that the relational database structure is well-suited to store trajectory data in the sample point format and that the access patterns for trajectory data change over time, we developed a concept for optimized spatio-temporal data structures for in-memory column stores and describe a workload-aware tiered data compression approach. The first evaluations of the approach demonstrate that the observed data access patterns of different real-world use cases are supporting the proposed system architecture.
                </span>

            </p>


            <div class="schedule-head"><span class="schedule-time">17:15 &ndash; 18:30</span><strong class="main-title">Technical Session 3: Potpourri</strong> (15 min each)</div>
            
            <p class="schedule-item" data-id="1110">
                <strong class="schedule-item-title">Truly Scalable Data Series Similarity Search</strong>
                <span class="schedule-item-people">
                    <span class="author">Karima&nbsp;Echihabi</span>&nbsp;(ENSIAS, Université Mohammed V de Rabat)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Data series are widely used in numerous domains. Analyzing this data is important for a variety of real-world applications and has been extensively studied over the past 25 years. At the core of the analysis task lies a classic algorithm called similarity search. A number of approaches have been proposed to support similarity search over massive data series collections. The results of two comprehensive data series experimental evaluations form the foundations of our future work, which will lead to the development of a novel index that can efficiently support both exact and approximate data series similarity search, as well as progressive query answering with bound guarantees. Based on the insights gained from the careful and exhaustive study of the related work, the new index will surpass the state-the-art approximate and exact techniques both in performance and accuracy.
                </span>

            </p>

            <p class="schedule-item" data-id="1121">
                <strong class="schedule-item-title">Data as a Language: A Novel Approach to Data Integration</strong>
                <span class="schedule-item-people">
                    <span class="author">Christos&nbsp;Koutras</span>&nbsp;(TU Delft)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In modern enterprises, both operational and organizational data is typically spread across multiple heterogeneous systems, databases and file systems. Recognizing the value of data assets, companies and institutions construct data lakes, storing disparate datasets from different departments and systems. However, for those datasets to become useful, they need to be cleaned and integrated. Data can be well documented, structured and encoded in different schemata, but also unstructured with implicit, human-understandable semantics. Due to the sheer scale of the data itself but also the multitude of representations and schemata, data integration techniques need to scale without relying heavily on human labor. Existing integration approaches fail to address hidden semantics without human input or some form of ontology, making large scale integration a daunting task. The goal of my doctoral work is to devise scalable data integration methods, employing modern machine learning to exploit semantics and facilitate discovery of novel relationship types. In order to capture semantics with minimal human intervention, we propose a new approach which we call Data as a Language (DaaL). By leveraging embeddings from the Natural Language Processing (NLP) literature, DaaL aims at extracting semantics from structured and semi-structured data, allowing the exploration of relevance and similarity among different data sources. This paper discusses existing data integration mechanisms and elaborates on how NLP techniques can be used in data integration, alongside challenges and research directions.
                </span>

            </p>

            <p class="schedule-item" data-id="1125">
                <strong class="schedule-item-title">Comprehensive Framework for Sorting Benchmarks</strong>
                <span class="schedule-item-people">
                    <span class="author">Sergey&nbsp;Madaminov</span>&nbsp;(Stony Brook University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In the early days, sorting accounted for almost 25% of all cycles that computers were spending. That led to the development of a variety of sorting algorithms and their implementations, as well as the creation of sorting benchmarks. However, those benchmarks do not account well for increasing variability in the nature of data and they also fail to assess architectural features of different computer systems depending on the choice of the sorting algorithm. This work proposes the development of a comprehensive sorting benchmark framework to address those issues and to help with the evaluation of sorting algorithms from both software and hardware perspectives.
                </span>

            </p>

            <p class="schedule-item" data-id="939">
                <strong class="schedule-item-title">A cross-domain natural language interface to databases using adversarial text method</strong>
                <span class="schedule-item-people">
                    <span class="author">Wenlu&nbsp;Wang</span>&nbsp;(Auburn University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    A natural language interface (NLI) to databases is an interface that supports natural language queries to be executed by database management systems (DBMS). However, most NLIs are domain specific due to the complexity of the natural language questions, and an NLI trained on one domain is hard to be transferred another due to the discrepancies between different ontology. Inspired by the idea of stripping domain-specific information out of natural language questions, we propose a cross-domain NLI with a general purpose question tagging strategy and a multi-language neural translation model. Our question tagging strategy is able to extract the "skeleton" of the question that represents its semantic structure for any domain. With question tagging, every domain will be handled equally with a single multi-language neural translation model. Our preliminary experiments show that our multi-domain model has excellent cross-domain transferability.
                </span>

            </p>

            <p class="schedule-item" data-id="1118">
                <strong class="schedule-item-title">Computational aspects around preference queries</strong>
                <span class="schedule-item-people">
                    <span class="author">Karim&nbsp;Alami</span>&nbsp;(University of Bordeaux, CNRS, LaBRI, UMR 5800)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Preference queries present two main challenges: difficulty for users to express their preferences and the computational complexity. For skyline queries, the preferences can be on attributes, e.g., some user may look for the best flights regarding price and number of stops, and others may look for the best flights regarding number of stops and duration. In addition, preference can be expressed as a (partial) order on attributes domains, e.g., some user may prefer flight company A over B while another one may have the opposite preference. For top-k queries, users define a score function to rank objects, e.g., users who give more importance to price could define the following score function: price ∗ 2 + duration of the flight. In general, several rounds are required before converging towards a satisfying answer where at each round, more precise preferences are given by the user. This is due to the difficulty to figure out the precise formulation of the user's preferences. Therefore, a more or less high number of queries need to be evaluated. Our research work aims to make these queries answering faster through dedicated index structures and precomputed views. The main challenges when adopting this strategy are (i) lightweight memory consumption and (ii) fast maintenance process. Our first step was NSC, an index structure that optimizes skyline queries. However, the structure was designed for a static context making it unsuitable when data can be inserted/deleted. We redesigned NSC to cope with dynamic data and in some cases, we proposed further approaches when the structure is not suitable. In this paper, we summarize our previous contributions and present some perspective research regarding the link between regret minimization queries and what we did so far.
                </span>

            </p>


        </div>

    </div>


</section>
<?php
define('PageTitle', "Program Schedule - PhD Workshop");
define('PageDescription', "List of accepted and scheduled PhD workshop.");
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebPage",
  "name": "Program Schedule - PhD Workshop",
  "url": "https://vldb.org/2019/?program-schedule-phd-workshop",
  "description": "List of accepted and scheduled PhD workshop.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "https://vldb.org/",
        "name": "VLDB"
      }
    },{
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "https://vldb.org/conference.html",
        "name": "Conferences"
      }
    },{
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "https://vldb.org/2019/",
        "name": "2019"
      }
    },{
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@id": "https://vldb.org/2019/?program",
        "name": "Conference Program"
      }
    },{
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@id": "https://vldb.org/2019/?program-schedule-phd-workshop",
        "name": "PhD Workshop"
      }
    }]
  }
}


</script>